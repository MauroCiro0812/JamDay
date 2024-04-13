<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Detalle;
use App\Models\Inventario;
use App\Models\Pedido;
use App\Models\Producto;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PDF;

class CarritoController extends Controller
{

    public function agregaritem(Request $request)
    {
        $producto = Producto::with('talla')->find($request->producto_id);

        if (!$producto) {
            // Manejar el caso en que el producto no se encuentra
            return redirect()->back()->with("error", "El producto no se encontró");
        }

        // Accede al valor de la talla desde el campo oculto
        $talla_id = $request->talla_id;

        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'options' => [
                'image' => $producto->foto,
                'talla_id' => $talla_id,
            ],
            'qty' => 1,
            'weight' => 1,
        ]);

        return redirect()->back()->with("success", "$producto->nombre se ha agregado correctamente al carrito");
    }

    public function index()
    {
        return view('cart.catalogo.carrito');
    }

    public function incrementarCantidad(Request $request)
    {
        $producto = Cart::content()->where("rowId", $request->id)->first();
        Cart::update($request->id, ["qty" => $producto->qty + 1]);

        return back()->with("success", "¡Agregaste una unidad más!");
    }

    public function decrementarCantidad(Request $request)
    {
        $producto = Cart::content()->where("rowId", $request->id)->first();
        Cart::update($request->id, ["qty" => $producto->qty - 1]);

        return back()->with("success", "¡Quitaste una unidad más!");
    }

    public function eliminaritem(Request $request)
    {
        $rowId = $request->id;

        // Verifica si el item está en el carrito antes de intentar eliminarlo
        $item = Cart::get($rowId);

        if ($item) {
            Cart::remove($rowId);
            return back()->with("success", "¡Item eliminado correctamente!");
        } else {
            return back()->with("error", "El item no se encuentra en el carrito");
        }
    }

    public function eliminarCarrito(Request $request)
    {
        Cart::destroy($request->id);

        return back()->with("success", "¡Carrito eliminado!");
    }

    public function confirmarCarrito(Request $request)
    {
        $pedido = new Pedido();

        $pedido->subtotal = round(floatval(Cart::subtotal()), 2);
        $pedido->impuesto = round(floatval(Cart::tax()), 2);
        $pedido->total = round(floatval(Cart::total()), 2);
        $pedido->fechapedido = now();
        $pedido->procedencia = "web";
        $pedido->estado = "nuevo";
        $pedido->user_id = auth()->user()->id;
        $pedido->save();

        $detallesCarrito = Cart::content();

        foreach ($detallesCarrito as $producto) {
            $detalle = new Detalle();
            $detalle->precio = floatval($producto->price);
            $detalle->cantidad = $producto->qty;
            $detalle->importe = floatval(number_format($producto->price * $producto->qty, 2, '.', ''));
            $detalle->producto_id = $producto->id;
            $detalle->pedido_id = $pedido->id;
            $detalle->save();

            // Restar del inventario
            $inventario = Inventario::where('id_producto', $producto->id)
                ->where('id_talla', $producto->options['talla_id'])
                ->first();

            if ($inventario->cantidad < $producto->qty) {
                return back()->with("success", "Lamentamos informarte que la cantidad de productos que deseas no se encuentran disponibles en este momento, cantidad disponible $inventario->cantidad");
            } else {
                $inventario->cantidad -= $producto->qty;
                $inventario->save();
            }
        }

        session()->put('detallesCarrito', $detallesCarrito);

        // Guardar los datos de envío en la sesión
        $datosEnvio = $request->only(['nombre_destinatario', 'direccion', 'instrucciones_entrega', 'telefono', 'metodo_pago', 'fecha']);
        session()->put('datosEnvio', $datosEnvio);

        // Obtener los detalles del carrito de la sesión
        $detallesCarrito = session()->get('detallesCarrito');

        // Obtener los datos de envío de la sesión
        $datosEnvioSession = session()->get('datosEnvio');

        // Cargar los detalles del carrito y los datos de envío en el PDF y enviar por correo electrónico
        $pdf = PDF::loadView('cart.PDFs.facturaPDF', ['detallesCarrito' => $detallesCarrito, 'datosEnvio' => $datosEnvioSession, 'pedido' => $pedido]);
        Mail::send('cart.emails.emailFactura', ['detallesCarrito' => $detallesCarrito, 'datosEnvio' => $datosEnvioSession], function ($mail) use ($pdf) {
            $email = Auth::user()->email;
            $mail->subject('Tu factura de compra');
            $mail->to($email);
            $mail->attachData($pdf->output(), 'Compra.pdf');
        });

        // Limpiar el carrito después de confirmar el pedido
        Cart::destroy();

        return back()->with("success", "¡Pedido generado con éxito!");
    }

    public function generarPDF()
    {

        // Obtener los datos de envío de la sesión
        $datosEnvio = session()->get('datosEnvio');

        // Obtener los detalles del carrito de la sesión
        $detallesCarrito = session()->get('detallesCarrito');

        // Cargar los detalles del carrito y los datos de envío en el PDF
        $pdf = PDF::loadView('cart.PDFs.facturaPDF', ['detallesCarrito' => $detallesCarrito, 'datosEnvio' => $datosEnvio]);

        return $pdf->download('factura_compra.pdf');
    }

    public function detallesFactura()
    {
        return view('cart.front.partials.detallesFactura');
    }

    public function seguircomprando()
    {
        return view('home.userHome');
    }

}
