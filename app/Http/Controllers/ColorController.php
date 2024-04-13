<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Color;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColorController extends Controller
{

    public function index()
    {
        $colores = Color::orderBy('id', 'ASC')
            ->paginate(5);
        return view('dashboard/color/indexC', ['colores' => $colores]);
    }

    public function create()
    {

        return view('dashboard/color.createC');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $data = $request->validate([
            'nombre' => 'required',
        ]);

        $result = DB::table('colores')->insert([
            'nombre' => $data['nombre'],
        ]);

        return redirect()->route('color.indexC');
    }

    public function update(Request $request, $id)
    {
        // Encuentra el color por su ID
        $color = Color::find($id);

        // Validaciones y lógica de actualización
        $request->validate([
            'nombre' => 'required|min:2',
        ]);

        // Actualiza los campos del color utilizando el método save
        $color->nombre = $request->input('nombre');
        $color->save();

        // Redirecciona a la vista de edición con un mensaje de éxito
        return redirect()->route('color.indexC', ['id' => $color->id])
            ->with('success', 'color actualizado exitosamente');
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);

        return view('dashboard/color.editC', ['color' => $color]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $color = Color::find($id);

        if ($color) {
            try {
                $color->delete();
                return redirect()->route("color.indexC")->with('success', 'Color eliminado exitosamente');

            } catch (QueryException $e) {
                // Si ocurre un error al eliminar el color, redirige con un mensaje de error
                return redirect()->route("color.indexC")->with('error', 'No se puede eliminar el color porque hay productos en el inventario');
            }

        } else {
            // Puedes manejar el caso donde el producto no se encuentra
            return redirect()->route("color.indexC")->with('error', 'No se pudo encontrar el color');
        }
    }

}
