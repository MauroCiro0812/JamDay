<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::orderBy('id', 'ASC')
            ->paginate(5);
        return view('dashboard.categoria.indexCa', ['categorias' => $categorias]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categoria.createCa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'nombre' => 'required',
        ]);

        // Intentar insertar en la base de datos
        try {
            $result = DB::table('categoria')->insert([
                'nombre' => $data['nombre'],
            ]);

            // Log del resultado de la inserción
            Log::info('Resultado de la inserción: ' . ($result ? 'Éxito' : 'Fallo'));

            if ($result) {
                // Log para verificar que intentó redirigir
                Log::info('Intentando redireccionar');
                return redirect()->route('categoria.indexCa');
            } else {
                dd('Error al insertar en la base de datos');
            }
        } catch (\Exception $e) {
            // Log del error
            Log::error('Error al insertar en la base de datos: ' . $e->getMessage());
            dd('Error al insertar en la base de datos');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categoria = Categoria::findOrFail($id);

        return view('dashboard/categoria.editCa', ['categoria' => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encuentra la categoria por su ID
        $categoria = Categoria::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'nombre' => 'required|min:5',
        ]);

        // Actualiza los campos de la categoria utilizando el método save
        $categoria->nombre = $request->input('nombre');
        $categoria->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('categoria.indexCa', ['id' => $categoria->id])
            ->with('success', 'categoria actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categoria = Categoria::find($id);

        if ($categoria) {

            try {
                $categoria->delete();
                return redirect()->route("categoria.indexCa")->with('success', 'categoria eliminada exitosamente');

            } catch (QueryException $e) {
                return redirect()->route("categoria.indexCa")->with('error', 'No se puede eliminar la categoria porque hay productos en el inventario');
            }

        } else {
            // Puedes manejar el caso donde el producto no se encuentra
            return redirect()->route("categoria.indexCa")->with('error', 'No se pudo encontrar la categoria');
        }
    }
}
