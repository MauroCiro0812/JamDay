<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detalle;

class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalles = Detalle::orderBy('id', 'ASC')
            ->paginate(5);

        return view('dashboard.detalle.indexDetalles', compact('detalles'));
    }

}
