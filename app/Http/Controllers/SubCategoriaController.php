<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Sub_categoria;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class SubCategoriaController extends Controller
{
    public function index()
    {
        $sub_categorias = Sub_categoria::orderBy('id', 'ASC')
            ->paginate(5);
        return view('dashboard/sub_categoria/indexS', ['sub_categorias' => $sub_categorias]);
    }

    public function create()
    {
        $categorias = DB::table('categoria')->get()->pluck('nombre', 'id');

        return view('dashboard/sub_categoria.createS', ['categorias' => $categorias]);
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'nombre' => 'required',
        ]);

        // Intentar insertar en la base de datos
        try {
            $result = DB::table('sub_categoria')->insert([
                'nombre' => $data['nombre'],
            ]);

            // Log del resultado de la inserción
            Log::info('Resultado de la inserción: ' . ($result ? 'Éxito' : 'Fallo'));

            if ($result) {
                // Log para verificar que intentó redirigir
                Log::info('Intentando redireccionar');
                return redirect()->route('sub_categoria.indexS');
            } else {
                dd('Error al insertar en la base de datos');
            }
        } catch (\Exception $e) {
            // Log del error
            Log::error('Error al insertar en la base de datos: ' . $e->getMessage());

            // Imprimir el mensaje de la excepción para obtener más detalles
            dd('Error al insertar en la base de datos: ' . $e->getMessage());
        }

    }

    public function update(Request $request, $id)
    {
        // Encuentra la sub_categoria por su ID
        $sub_categoria = Sub_categoria::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'nombre' => 'required|min:5',
        ]);

        // Actualiza los campos del color utilizando el método save
        $sub_categoria->nombre = $request->input('nombre');
        $sub_categoria->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('sub_categoria.indexS', ['id' => $sub_categoria])
            ->with('success', 'Sub_Categoria eliminada exitosamente');

    }

    public function edit($id)
    {
        $sub_categoria = Sub_categoria::findOrFail($id);

        return view('dashboard/sub_categoria.editS', compact('sub_categoria'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sub_categoria = Sub_categoria::find($id);

        if ($sub_categoria) {

            try {
                $sub_categoria->delete();
                return redirect()->route("sub_categoria.indexS")->with('success', 'Sub_categoria eliminada exitosamente');

            } catch (QueryException $e) {
                return redirect()->route('sub_categoria.indexS')->with('error', 'No se pudo encontrar la sub_categoria');
            }

        } else {
            return redirect()->route("sub_categoria.indexS")->with('error', 'No se pudo encontrar la sub_categoria');
        }
    }

}
