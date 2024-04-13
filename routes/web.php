<?php

use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\ChatUserController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\MarcaController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SubCategoriaController;
use App\Http\Controllers\TallaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Auth::routes([
    'verify' => true]);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', [WelcomeController::class, 'indexWelcome'])->name('welcome');

Route::get('/about', function () {
    return view('errors.about');})->name('about');

Route::get('/preguntas/frecuentes', function () {
    return view('errors.preguntasFrecuentes');})->name('preguntasFrecuentes');

Route::get('/support', [ChatUserController::class, 'supportUser'])->name('supportUser.index');

/*------------------------------------------
--------------------------------------------
Productos en el home
--------------------------------------------
--------------------------------------------*/

Route::get('/productos', [HomeController::class, 'indexFilter'])->name('productosindex');

Route::get('/producto/{id}', [HomeController::class, 'show'])->name('productoHome.show');

Route::get('/producto/{id}/{talla}', [HomeController::class, 'getCantidadPorTalla'])->name('producto.talla');

/*------------------------------------------
--------------------------------------------
Home Hombre y mujer
--------------------------------------------
--------------------------------------------*/

Route::get('/productos_hombre', [HomeController::class, 'indexHombre'])->name('productos_hombre');

Route::get('/productos_mujer', [HomeController::class, 'indexMujer'])->name('productos_mujer');

/*------------------------------------------
--------------------------------------------
Google authentication
--------------------------------------------
--------------------------------------------*/

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

    if ($userExists) {
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user->name,
            'surname' => 'Sin registro',
            'typeid' => 'Sin registro',
            'idnumber' => '0',
            'email' => $user->email,
            'avatar' => $user->avatar,
            'external_id' => $user->id,
            'external_auth' => 'google',
        ]);

        Auth::login($userNew);
    }

    return redirect('/home');

    // $user->token
});

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/user/perfil', [HomeController::class, 'perfilUser'])->name('perfilUser');
    Route::resource('user', UserController::class)->names([
        'edit' => 'users.edit',
        'update' => 'users.update',
    ]);

    Route::post('user/rating', [RatingController::class, 'storeUser'])->name('user.ratings.store');

});

/*------------------------------------------
--------------------------------------------
All Admins or manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'admin_or_manager'])->group(function () {

    Route::get('/admin/perfil', [HomeController::class, 'perfilAdmin'])->name('perfilAdmin');
    Route::resource('admin/users', UserController::class)->names([
        'index' => 'adminUsers.index',
        'create' => 'adminUsers.create',
        'store' => 'adminUsers.store',
        'show' => 'adminUsers.show',
        'edit' => 'adminUsers.edit',
        'update' => 'adminUsers.update',
        'destroy' => 'adminUsers.destroy',
        'avatar' => 'users.avatar',
    ]);

    Route::get('admin/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

    Route::get('admin/dashboard/producto', [ProductoController::class, 'index'])->name('productos.indexP');
    Route::get('admin/dashboard/producto/create', [ProductoController::class, 'create'])->name('productos.createP');
    Route::post('dashboard/producto', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('admin/dashboard/producto/{id}/edit', [ProductoController::class, 'edit'])->name('productos.editP');
    Route::put('admin/dashboard/producto/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('admin/dashboard/producto/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
    Route::get('admin/dashboard/producto/{id}', [ProductoController::class, 'show'])->name('productos.show');

    Route::get('admin/dashboard/inventario', [InventarioController::class, 'index'])->name('inventario.index');
    Route::get('admin/dashboard/inventario/create', [InventarioController::class, 'create'])->name('inventario.create');
    Route::post('admin/dashboard/inventario', [InventarioController::class, 'store'])->name('inventario.store');
    Route::get('admin/dashboard/inventario/{id}/edit', [InventarioController::class, 'edit'])->name('inventario.edit');
    Route::put('admin/dashboard/inventario/{id}', [InventarioController::class, 'update'])->name('inventario.update');
    Route::delete('admin/dashboard/inventario/{id}', [InventarioController::class, 'destroy'])->name('inventario.destroy');

    Route::post('/select-product', [InventarioController::class, 'selectProducto'])->name('Inventario.selectProduct');

    Route::get('admin/dashboard/color', [ColorController::class, 'index'])->name('color.indexC');
    Route::get('admin/dashboard/color/create', [ColorController::class, 'create'])->name('color.createC');
    Route::post('admin/dashboard/color', [ColorController::class, 'store'])->name('color.store');
    Route::get('admin/dashboard/color/{id}/edit', [ColorController::class, 'edit'])->name('color.editC');
    Route::put('admin/dashboard/color/{id}', [ColorController::class, 'update'])->name('color.update');
    Route::delete('admin/dashboard/color/{id}', [ColorController::class, 'destroy'])->name('color.destroy');

    Route::get('admin/dashboard/tallas', [TallaController::class, 'index'])->name('tallas.indexT');
    Route::get('admin/dashboard/tallas/create', [TallaController::class, 'create'])->name('tallas.createT');
    Route::post('admin/dashboard/tallas', [TallaController::class, 'store'])->name('tallas.store');
    Route::get('admin/dashboard/tallas/{id}/edit', [TallaController::class, 'edit'])->name('tallas.editT');
    Route::put('admin/dashboard/tallas/{id}', [TallaController::class, 'update'])->name('tallas.update');
    Route::delete('admin/dashboard/tallas/{id}', [TallaController::class, 'destroy'])->name('tallas.destroy');

    Route::get('admin/dashboard/categoria', [CategoriaController::class, 'index'])->name('categoria.indexCa');
    Route::get('admin/dashboard/categoria/create', [CategoriaController::class, 'create'])->name('categoria.createCa');
    Route::post('admin/dashboard/categoria', [CategoriaController::class, 'store'])->name('categoria.store');
    Route::get('admin/dashboard/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.editCa');
    Route::put('admin/dashboard/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');
    Route::delete('admin/dashboard/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.destroy');

    Route::get('admin/dashboard/sub_categoria', [SubCategoriaController::class, 'index'])->name('sub_categoria.indexS');
    Route::get('admin/dashboard/sub_categoria/create', [SubCategoriaController::class, 'create'])->name('sub_categoria.createS');
    Route::post('admin/dashboard/sub_categoria', [SubCategoriaController::class, 'store'])->name('sub_categoria.store');
    Route::get('admin/dashboard/sub_categoria/{id}/edit', [SubCategoriaController::class, 'edit'])->name('sub_categoria.editS');
    Route::put('admin/dashboard/sub_categoria/{id}', [SubCategoriaController::class, 'update'])->name('sub_categoria.update');
    Route::delete('admin/dashboard/sub_categoria/{id}', [SubCategoriaController::class, 'destroy'])->name('sub_categoria.destroy');

    Route::get('admin/dashboard/marca', [MarcaController::class, 'index'])->name('marca.indexM');
    Route::get('admin/dashboard/marca/create', [MarcaController::class, 'create'])->name('marca.createM');
    Route::post('admin/dashboard/marca', [MarcaController::class, 'store'])->name('marca.store');
    Route::get('dashboard/marca/editM/{id}', [MarcaController::class, 'edit'])->name('marca.editM');
    Route::put('admin/dashboard/marca/{id}', [MarcaController::class, 'update'])->name('marca.update');
    Route::delete('admin/dashboard/marca/{id}', [MarcaController::class, 'destroy'])->name('marca.destroy');

    Route::get('admin/dashboard/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
    Route::get('admin/dashboard/detalle', [DetalleController::class, 'index'])->name('detalle.indexD');

    Route::resource('admin/dashboard/rating', RatingController::class)->names([
        'index' => 'ratings.index',
        'create' => 'ratings.create',
        'store' => 'ratings.store',
        'show' => 'ratings.show',
        'edit' => 'ratings.edit',
        'update' => 'ratings.update',
        'destroy' => 'ratings.destroy',
    ]);

    Route::resource('admin/dashboard/soporte', ChatUserController::class)->names([
        'index' => 'soporte.index',
        'create' => 'soporte.create',
        'store' => 'soporte.store',
        'show' => 'soporte.show',
        'edit' => 'soporte.edit',
        'update' => 'soporte.update',
        'destroy' => 'soporte.destroy',
    ]);
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

});

/*------------------------------------------
--------------------------------------------
All Managers Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
    Route::get('/manager/perfil', [HomeController::class, 'perfilManager'])->name('perfilManager');

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexFilter'])->name('home')->Middleware(['auth', 'verified']);

/*------------------------------------------
--------------------------------------------
rutas para el carrito
--------------------------------------------
--------------------------------------------*/

Route::post('/agregaritem', [CarritoController::class, 'agregaritem'])->name('agregaritem');
Route::get('/seguircomprando', [HomeController::class, 'indexFilter'])->name('seguircomprando');
Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index');
Route::get('/incrementar/{id}', [CarritoController::class, 'incrementarCantidad'])->name('incrementarCantidad');
Route::get('/decrementar/{id}', [CarritoController::class, 'decrementarCantidad'])->name('decrementarCantidad');
Route::get('/eliminar/{id}', [CarritoController::class, 'eliminaritem'])->name('eliminaritem');
Route::get('/eliminarCarrito', [CarritoController::class, 'eliminarCarrito'])->name('eliminarCarrito');

Route::middleware(['auth'])->group(function () {
    Route::get('/confirmarCarrito', [CarritoController::class, 'confirmarCarrito'])->name('confirmarCarrito');
    Route::get('/detalles/compra', [CarritoController::class, 'detallesFactura'])->name('detallesFactura');
    Route::get('/generar/pdf', [CarritoController::class, 'generarPDF'])->name('facturaPDFdownload');
});

/*------------------------------------------
--------------------------------------------
rutas para el chat
--------------------------------------------
--------------------------------------------*/

Route::get('auth/user', function () {
    if (auth()->check()) {
        return response()->json([
            'authUser' => auth()->user(),
        ]);
        return null;
    }
});

Route::middleware(['auth'])->group(function () {

    Route::get('/chat/{chat}/get_users', [ChatController::class, 'get_users'])->name('chat.get_users');
    Route::get('/chat/{chat}/get_messages', [ChatController::class, 'get_messages'])->name('chat.get_messages');
    Route::get('/chat/with/{user}', [ChatController::class, 'chat_with'])->name('chat.with');
    Route::get('chat/{chat}', [ChatController::class, 'show'])->name('chat.show');
    Route::post('message/sent', [MessageController::class, 'sent'])->name('message.sent');

});
