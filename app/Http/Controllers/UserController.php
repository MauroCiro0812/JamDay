<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate();

        return view('CRUDuser.index', compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $user = new User();
        return view('CRUDuser.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'typeid' => 'required',
            'idnumber' => 'required',
            'email' => 'required|email|unique:users',
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/'],
            'avatar' => 'required|mimes:jpg,png,jpeg,webp|max:1024',
        ]);

        $folder = "avatars";

        $user = new User;
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->typeid = $request->typeid;
        $user->idnumber = $request->idnumber;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $avatar_path = Storage::disk('s3')->put($folder, $request->avatar, 'public');

        $base_url = 'https://jamday-app-bucket-s3.s3.amazonaws.com/';
        $avatar_url = $base_url . $avatar_path;

        $user->avatar = $avatar_url;
        $user->save();

        return redirect()->route('adminUsers.index')
            ->with('success', 'User created successfully.');

    }
    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $user = User::find($id);

        return view('CRUDuser.show', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {

        if (Auth::user()->type == 'admin' || Auth::user()->type == 'manager') {
            $user = User::find($id);
            return view('CRUDuser.edit', compact('user'));

        } elseif (Auth::user()->type == 'user') {
            $authUser = Auth::user();
            $user = User::find($id);

            if ($authUser->id != $user->id) {
                return view('errors.accesoDenegado');
            }
            return view('CRUDuser.editUser', compact('user'));
        }

        return redirect('/home')->with('error', 'Tipo de usuario no reconocido');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user): RedirectResponse
    {
        request()->validate(User::$rules);

        $folder = 'avatars';

        if ($request->hasFile('avatar')) {
            $avatar_path = Storage::disk('s3')->put($folder, $request->avatar, 'public');
            $base_url = 'https://jamday-app-bucket-s3.s3.amazonaws.com/';
            $avatar_url = $base_url . $avatar_path;

        } else {
            $avatar_url = $user->avatar;
        }

        if (Auth::user()->type == 'admin' || Auth::user()->type == 'manager') {
            $user->update([
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'typeid' => $request->get('typeid'),
                'idnumber' => $request->get('idnumber'),
                'email' => $request->get('email'),
                'password' => $request->get('password') ? Hash::make($request->get('password')) : $user->password,
                'type' => $request->get('type'),
                'avatar' => $avatar_url,
            ]);

            return redirect()->route('adminUsers.index')->with('success', 'User updated successfully');

        } elseif (Auth::user()->type == 'user') {

            $request->validate([
                'name' => 'required',
                'surname' => 'required',
                'typeid' => 'required',
                'idnumber' => 'required',
                'email' => 'required|email|',
                'password' => ['nullable', 'string', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/'],
            ]);

            $password = $request->get('password');
            if (!empty($password)) {
                $password = Hash::make($password);
            } else {
                $password = $user->password;
            }

            $user->update([
                'name' => $request->get('name'),
                'surname' => $request->get('surname'),
                'typeid' => $request->get('typeid'),
                'idnumber' => $request->get('idnumber'),
                'email' => $request->get('email'),
                'password' => $request->get('password') ? Hash::make($request->get('password')) : $user->password,
                'type' => '0',
                'avatar' => $avatar_url,
            ]);

            return redirect()->route('perfilUser')
                ->with('success', 'User updated successfully');
        }

        return redirect('/home');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $user = User::find($id);

        if ($user) {

            Storage::disk('s3')->delete($user->avatar);

            try {
                $user->delete();
                return redirect()->route('adminUsers.index')->with('success', 'User deleted successfully');

            } catch (QueryException $e) {

                // Si ocurre un error al eliminar el usuario, redirige con un mensaje de error
                return redirect()->route("adminUsers.index")->with('error', 'No se puede eliminar el usuario porque hay productos en el inventario');
            }
        } else {

            return redirect()->route("adminUsers.index")->with('error', 'No se puede eliminar el color porque hay productos en el inventario');
        }

    }

}
