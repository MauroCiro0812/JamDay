<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Marca;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MarcaController extends Controller
{
    public function index()
    {
        $marcas = Marca::orderBy('id', 'ASC')
            ->paginate(5);
        return view('dashboard/marca/indexM', ['marcas' => $marcas]);
    }

    public function create()
    {

        return view('dashboard/marca.createM');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'nombre' => 'required',
        ]);

        // Intentar insertar en la base de datos
        try {
            $result = DB::table('marcas')->insert([
                'nombre' => $data['nombre'],
            ]);

            // Log del resultado de la inserción
            Log::info('Resultado de la inserción: ' . ($result ? 'Éxito' : 'Fallo'));

            if ($result) {
                // Log para verificar que intentó redirigir
                Log::info('Intentando redireccionar');
                return redirect()->route('marca.indexM');
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
        // Encuentra la marca por su ID
        $marca = Marca::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'nombre' => 'required|min:2',
        ]);

        // Actualiza los campos de la marca utilizando el método save
        $marca->nombre = $request->input('nombre');
        $marca->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('marca.indexM', ['id' => $marca->id])
            ->with('success', 'marca actualizado exitosamente');
    }

    public function edit($id)
    {
        $marca = Marca::findOrFail($id);

        return view('dashboard/marca.editM', ['marca' => $marca]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $marca = Marca::find($id);

        if ($marca) {
            try {
                $marca->delete();
                return redirect()->route('marca.indexM')->with('success', 'Marca eliminada exitosamente');

            } catch (QueryException $e) {
                return redirect()->route('marca.indexM')->with('error', 'No se pudo encontrar la marca');
            }

        } else {
            // Puedes manejar el caso donde el producto no se encuentra
            return redirect()->route('marca.indexM')->with('error', 'No se pudo encontrar la marca');
        }
    }
}
