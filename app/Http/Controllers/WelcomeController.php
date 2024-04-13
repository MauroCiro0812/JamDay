<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function indexWelcome(Request $request)
    {
        $productos2 = Producto::all();

        $id_categoria = $request->get('id_categoria');
        $id_marca = $request->get('id_marca');
        $id_color = $request->get('id_color');
        $id_talla = $request->get('id_talla');
        $id_sub_categoria = $request->get('id_sub_categoria');

        $productos = Producto::orderBy('id', 'ASC')
            ->categoria($id_categoria)
            ->marca($id_marca)
            ->color($id_color)
            ->talla($id_talla)
            ->sub_categoria($id_sub_categoria)
            ->paginate(9)
            ->appends([
                'id_categoria' => $id_categoria,
                'id_marca' => $id_marca,
                'id_color' => $id_color,
                'id_talla' => $id_talla,
                'id_sub_categoria' => $id_sub_categoria,
            ]);

        $ratings = DB::table('ratings')
            ->select('producto_id', DB::raw('ROUND(AVG(rating)) as rating_avg'))
            ->groupBy('producto_id')
            ->havingRaw('ROUND(AVG(rating)) >= 3')
            ->orderBy(DB::raw('ROUND(AVG(rating))'), 'desc')
            ->take(10)
            ->get();

        return view('home.userHome', compact('productos', 'productos2', 'ratings'));
    }
}
