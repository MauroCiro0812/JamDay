<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    //validacion para usuarios con autorizacion

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $categoria = DB::table('categoria');
        $sub_categoria = DB::table('sub_categoria');
        $color = DB::table('colores');
        $productos = Producto::orderBy('id', 'ASC')
            ->get();

        return view('dashboard.productos.indexP', compact('productos', 'categoria', 'sub_categoria', 'color'));
    }

    public function home()
    {
        $productos = Producto::all();
        return view('home/productoHome', ['productos' => $productos]);
    }

    public function show($id)
    {
        $producto = Producto::find($id);

        return view('dashboard.productos.showP', compact('producto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $marcas = DB::table('marcas')->pluck('nombre', 'id');
        $sub_categoria = DB::table('sub_categoria')->get()->pluck('nombre', 'id');
        $colores = DB::table('colores')->pluck('nombre', 'id');
        $categoria = DB::table('categoria');
        $tallas = DB::table('tallas')->pluck('tallas', 'id');

        return view('dashboard.productos.createP', compact('marcas', 'colores', 'categoria', 'sub_categoria', 'tallas', ));
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'nombre' => 'required|min:5',
            'precio' => 'required|numeric',
            'id_color' => 'required|exists:colores,id',
            'id_categoria' => 'required|exists:categoria,id',
            'id_sub_categoria' => 'required|exists:sub_categoria,id',
            'id_talla' => 'required|exists:tallas,id',
            'id_marca' => 'required|exists:marcas,id',
            'descripcion' => 'required|min:15',
            'foto' => 'required|mimes:jpg,png,jpeg,webp|max:1024',
        ]);

        // Intentar insertar en la base de datos
        try {
            $folder = "productos";

            $foto_path = Storage::disk('s3')->put($folder, $request->foto, 'public');
            $base_url = 'https://jamday-app-bucket-s3.s3.amazonaws.com/';
            $foto_url = $base_url . $foto_path;

            $result = DB::table('productos')->insert([
                'nombre' => $data['nombre'],
                'precio' => $data['precio'],
                'id_marca' => $data['id_marca'],
                'id_color' => $data['id_color'],
                'id_categoria' => $data['id_categoria'],
                'id_sub_categoria' => $data['id_sub_categoria'],
                'id_talla' => $data['id_talla'],
                'descripcion' => $data['descripcion'],
                'foto' => $foto_url,
            ]);

            // Log del resultado de la inserción
            Log::info('Resultado de la inserción: ' . ($result ? 'Éxito' : 'Fallo'));

            if ($result) {
                // Log para verificar que intentó redirigir
                Log::info('Intentando redireccionar');
                return redirect()->route('productos.indexP');
            } else {
                dd('Error al insertar en la base de datos');
            }
        } catch (\Exception $e) {
            // Log del error
            Log::error('Error al insertar en la base de datos: ' . $e->getMessage());
            dd($e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::find($id);

        // Validaciones y lógica de actualización
        $data = $request->validate([
            'nombre' => 'required|min:5',
            'precio' => 'required|numeric',
            'id_color' => 'required|exists:colores,id',
            'id_categoria' => 'required|exists:categoria,id',
            'id_sub_categoria' => 'required|exists:sub_categoria,id',
            'id_talla' => 'required|exists:tallas,id',
            'id_marca' => 'required|exists:marcas,id',
            'descripcion' => 'required|min:15',
            'foto' => 'required|mimes:jpg,png,jpeg,webp|max:1024',
        ]);

        // Actualiza los campos del producto utilizando el método save

        $folder = 'productos';

        if ($request->hasFile('foto')) {
            $foto_path = Storage::disk('s3')->put($folder, $request->foto, 'public');
            $base_url = 'https://jamday-app-bucket-s3.s3.amazonaws.com/';
            $foto_url = $base_url . $foto_path;

        } else {
            $foto_url = $producto->foto;
        }

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->id_marca = $request->input('id_marca');
        $producto->id_color = $request->input('id_color');
        $producto->id_sub_categoria = $request->input('id_sub_categoria');
        $producto->id_categoria = $request->input('id_categoria');
        $producto->id_talla = $request->input('id_talla');
        $producto->descripcion = $request->input('descripcion');
        $producto->foto = $foto_url;

        $producto->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('productos.indexP', ['id' => $producto->id])
            ->with('success', 'Producto actualizado exitosamente');
    }

    public function edit($id)
    {
        // Encuentra el producto por su ID
        $producto = Producto::findOrFail($id);
        $marcas = DB::table('marcas')->pluck('nombre', 'id');
        $sub_categoria = DB::table('sub_categoria')->get()->pluck('nombre', 'id');
        $colores = DB::table('colores')->pluck('nombre', 'id');
        $categoria = DB::table('categoria');
        $tallas = DB::table('tallas')->pluck('tallas', 'id');

        // Pasa las variables a la vista
        return view('dashboard.productos.editP', compact('producto', 'marcas', 'colores', 'categoria', 'sub_categoria', 'tallas', ));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Producto::find($id);

        Storage::disk('s3')->delete($producto->foto);

        if ($producto) {
            try {
                $producto->delete();
                return redirect()->route("productos.indexP")->with('success', 'Producto eliminado exitosamente');
            } catch (QueryException $e) {
                // Si ocurre un error al eliminar el producto, redirige con un mensaje de error
                return redirect()->route("productos.indexP")->with('error', 'No se puede eliminar el producto porque hay productos en el inventario');
            }
        } else {
            // Maneja el caso donde el producto no se encuentra
            return redirect()->route("productos.indexP")->with('error', 'No se pudo encontrar el producto');
        }
    }

}
