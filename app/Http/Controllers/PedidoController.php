<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {

        $pedidos = Pedido::with('user')->orderBy('id', 'ASC')->paginate(5);
        return view('dashboard.pedidos.indexPedidos', compact('pedidos'));
    }
}
