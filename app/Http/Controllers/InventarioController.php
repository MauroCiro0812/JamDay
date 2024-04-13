<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class InventarioController extends Controller
{
    public function index()
    {
        // Cargar los inventarios con las relaciones producto, talla y color
        $inventarios = Inventario::with(['producto.color', 'producto.categoria', 'producto.sub_categoria', 'talla'])
            ->orderBy('id', 'ASC')
            ->get();

        return view('dashboard.inventario.indexI', compact('inventarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        $productos = Producto::all()->pluck('nombre', 'id');
        $tallas = Talla::all()->pluck('tallas', 'id');

        return view('dashboard/inventario.createI', compact('productos', 'tallas', 'categorias'));
    }

    public function store(Request $request)
    {
        $categorias = Categoria::all();

        // Validación de los datos del formulario
        $data = $request->validate([
            'id_producto' => 'required|exists:productos,id',
            'id_talla' => 'required|exists:tallas,id',
            'cantidad' => 'required|numeric',
        ]);

        // Busca un registro existente con los mismos valores de id_producto e id_talla
        $existingInventory = DB::table('inventario')
            ->where('id_producto', $data['id_producto'])
            ->where('id_talla', $data['id_talla'])
            ->first();

        if ($existingInventory) {
            // Si existe, suma la cantidad al registro existente
            $result = DB::table('inventario')
                ->where('id_producto', $data['id_producto'])
                ->where('id_talla', $data['id_talla'])
                ->increment('cantidad', $data['cantidad']);

            // Actualiza el campo updated_at
            DB::table('inventario')
                ->where('id_producto', $data['id_producto'])
                ->where('id_talla', $data['id_talla'])
                ->update(['updated_at' => now()]);
        } else {
            // Si no existe, intenta insertar en la base de datos
            try {
                $result = DB::table('inventario')->insert([
                    'id_producto' => $data['id_producto'],
                    'id_talla' => $data['id_talla'],
                    'cantidad' => $data['cantidad'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            } catch (\Exception $e) {
                // Log del error
                Log::error('Error al insertar en la base de datos: ' . $e->getMessage());
                dd('Error al insertar en la base de datos');
            }
        }

        // Log del resultado de la inserción o actualización
        Log::info('Resultado de la operación: ' . ($result ? 'Éxito' : 'Fallo'));

        if ($result) {
            // Log para verificar que intentó redirigir
            Log::info('Intentando redireccionar');
            return redirect()->route('inventario.index');
        } else {
            dd('Error al insertar o actualizar en la base de datos');
        }

    }

    public function update(Request $request, $id)
    {
        // Encuentra el producto por su ID
        $inventario = Inventario::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'id_producto' => 'required|exists:productos,id',
            'id_talla' => 'required|exists:tallas,id',
            'cantidad' => 'required|numeric',
        ]);

        // Actualiza los campos del producto utilizando el método save
        $inventario->id_producto = $request->input('id_producto');
        $inventario->id_talla = $request->input('id_talla');
        $inventario->cantidad = $request->input('cantidad');
        $inventario->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('inventario.index')
            ->with('success', 'Producto actualizado exitosamente');
    }

    public function edit($id)
    {
        // Encuentra el producto por su ID
        $inventario = Inventario::findOrFail($id);

        // Obtén los colores, tallas, sub_categorias, u otras variables necesarias
        $producto = Producto::all()->pluck('nombre', 'id');
        $talla = Talla::all()->pluck('tallas', 'id');

        // Pasa las variables a la vista
        return view('dashboard.inventario.editI', compact('producto', 'talla', 'inventario'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inventario = Inventario::find($id);

        if ($inventario) {
            $inventario->delete();
            return redirect()->route("inventario.index")->with('success', 'Producto del inventario eliminado exitosamente');
        } else {
            // Puedes manejar el caso donde el producto no se encuentra
            return redirect()->route("inventario.index")->with('error', 'No se pudo encontrar el producto');
        }
    }

    public function selectProducto(Request $request)
    {
        $productId = $request->get('product');
        // Buscar la información del producto en la base de datos
        $product = Producto::with('categoria', 'sub_Categoria', 'color')->find($productId);

        // Agregar la información relacionada al producto
        $product->nombre_categoria = $product->categoria->nombre;
        $product->nombre_subCategoria = $product->sub_Categoria->nombre;
        $product->nombre_color = $product->color->nombre;
        // Emitir el evento ProductoSelected con la información del producto

        return $product;
    }

}
