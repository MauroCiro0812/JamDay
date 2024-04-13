<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Talla;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TallaController extends Controller
{
    public function index()
    {
        $tallas = Talla::orderBy('id', 'ASC')
            ->paginate(5);
        return view('dashboard.talla.indexT', ['tallas' => $tallas]);
    }

    public function create()
    {

        return view('dashboard.talla.createT');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'tallas' => 'required',
        ]);

        $result = DB::table('tallas')->insert([
            'tallas' => $data['tallas'],
        ]);

        // Intentar insertar en la base de datos
        try {
            $result = DB::table('tallas')->insert([
                'tallas' => $data['tallas'],
            ]);

            // Log del resultado de la inserción
            Log::info('Resultado de la inserción: ' . ($result ? 'Éxito' : 'Fallo'));

            if ($result) {
                // Log para verificar que intentó redirigir
                Log::info('Intentando redireccionar');
                return redirect()->route('dashboard.talla.indexT');
            } else {
                dd('Error al insertar en la base de datos');
            }
        } catch (\Exception $e) {
            // Log del error
            Log::error('Error al insertar en la base de datos: ' . $e->getMessage());
            dd('Error al insertar en la base de datos');
        }
    }

    public function update(Request $request, $id)
    {
        // Encuentra el producto por su ID
        $talla = Talla::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'tallas' => 'required',
        ]);

        // Actualiza los campos del producto utilizando el método save
        $talla->tallas = $request->input('tallas');
        $talla->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('tallas.indexT', ['id' => $talla->id])
            ->with('success', 'talla actualizado exitosamente');
    }

    public function edit($id)
    {
        $talla = Talla::findOrFail($id);

        return view('dashboard.talla.editT', ['talla' => $talla]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $talla = Talla::find($id);

        if ($talla) {

            try {
                $talla->delete();
                return redirect()->route("tallas.indexT")->with('success', 'Talla eliminada exitosamente');
            } catch (QueryException $e) {
                return redirect()->route("tallas.indexT")->with('error', 'No se puede eliminar la talla porque hay productos en el inventario');
            }
        } else {
            // Puedes manejar el caso donde el producto no se encuentra
            return redirect()->route("tallas.indexT")->with('error', 'No se pudo encontrar la talla');
        }
    }

}
