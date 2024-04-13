<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\ChatUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class ChatUserController
 * @package App\Http\Controllers
 */
class ChatUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chatUsers = ChatUser::paginate();
        $user = DB::table('users');

        return view('dashboard.soporte.index', compact('chatUsers', 'user'))
            ->with('i', (request()->input('page', 1) - 1) * $chatUsers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $chatUser = new ChatUser();
        return view('dashboard.soporte.create', compact('chatUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ChatUser::$rules);

        $chatUser = ChatUser::create($request->all());

        return redirect()->route('soporte.index')
            ->with('success', 'ChatUser created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chatUser = ChatUser::find($id);

        return view('dashboard.soporte.show', compact('chatUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chatUser = ChatUser::find($id);

        return view('dashboard.soporte.edit', compact('chatUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ChatUser $chatUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChatUser $chatUser)
    {
        request()->validate(ChatUser::$rules);

        $chatUser->update($request->all());

        return redirect()->route('soporte.index')
            ->with('success', 'ChatUser updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $chatUser = ChatUser::find($id)->delete();

        return redirect()->route('soporte.index')
            ->with('success', 'ChatUser deleted successfully');
    }

    public function supportUser()
    {
        $chatUsers = ChatUser::paginate();
        $user = DB::table('users');
        $lista_asesores = DB::table('users')->where('type', 1)->get();
        if (Auth::check()) {
            $salas_activas = DB::table('chat_user')->where('user_id', Auth::user()->id)->get();
        } else {
            $salas_activas = null;
        }

        return view('errors.HelpAndSupport', compact('chatUsers', 'user', 'lista_asesores', 'salas_activas'));
    }
}