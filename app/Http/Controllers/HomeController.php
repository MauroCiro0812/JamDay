<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use App\Models\Producto;
use App\Models\Rating;
use App\Models\Talla;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Filtrar los productos en el home

    public function indexFilter(Request $request)
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

    // Filtrar los productos en el home / hombre

    public function indexHombre(Request $request)
    {
        $productos = Producto::all();
        return view('hombre_mujer.hombreHome', compact('productos'));
    }

    // Filtrar los productos en el home / mujer

    public function indexMujer(Request $request)
    {
        $productos = Producto::all();
        return view('hombre_mujer.mujerHome', compact('productos'));
    }

    // Filtrar la cantidad de producto por talla en el inventario"

    public function show($id, $talla = null)
    {
        $producto = Producto::find($id);
        $ratings = Rating::orderBy('created_at', 'desc')->get();
        $rating_avg = Rating::where('producto_id', $id)
            ->select(DB::raw('ROUND(AVG(rating)) as rating_avg'))
            ->value('rating_avg');

        if (Auth::check()) {
            $rating_user = Rating::where('user_id', Auth::user()->id)
                ->where('producto_id', $producto->id)
                ->latest()
                ->first();
        } else {
            $rating_user = 0;
        }

        // Obtén las tallas con sus IDs y nombres
        $inventarioQuery = Inventario::where('id_producto', $id);
        $tallas = $inventarioQuery->with('talla:id,tallas')->get(['id_talla']);

        $tallasNombres = $tallas->pluck('talla.tallas', 'id_talla');

        if ($talla !== null) {
            $inventario = $inventarioQuery->where('id_talla', $talla)->first();
        } else {
            // Manejar el caso en que no se selecciona ninguna talla
            $inventario = null;
        }

        $inventario = $inventarioQuery->first(); // Obtén el primer registro de inventario

        // producto en stock
        $cantidadTotal = Inventario::where('id_producto', $producto->id)->sum('cantidad');

        return view('home.productoView', compact('producto', 'inventario', 'tallasNombres', 'tallas', 'ratings', 'rating_user', 'rating_avg', 'cantidadTotal', ));
    }

    public function getCantidadPorTalla($id_producto, $id_talla)
    {
        $cantidad = Inventario::where('id_producto', $id_producto)
            ->where('id_talla', $id_talla)
            ->sum('cantidad');

        return response()->json(['cantidad' => $cantidad]);
    }

    //Controladores para el USERS

    public function perfilUser()
    {
        return view('perfiles.perfilUser');
    }

    // Controladores para el ADMINS

    public function perfilAdmin()
    {
        return view('perfiles.perfilAdmin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    // Controladores para el MANAGERS

    public function perfilManager()
    {
        return view('perfiles.perfilManager');
    }

    public function dashboard()
    {
        return view('dashboard.dashboard');
    }
}
