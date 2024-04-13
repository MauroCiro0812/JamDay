<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

/**
 * Class RatingController
 * @package App\Http\Controllers
 */
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): view
    {
        $ratings = Rating::all();
        $user = DB::table('users');
        $producto = DB::table('producto');

        return view('dashboard.rating.index', compact('ratings', 'user', 'producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): view
    {
        $rating = new Rating();
        return view('dashboard.rating.create', compact('rating'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        request()->validate(Rating::$rules);

        $rating = Rating::create($request->all());

        return redirect()->back();

    }

    public function storeUser(Request $request): RedirectResponse
    {
        request()->validate(Rating::$rules);

        $rating = Rating::create($request->all());

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): view
    {
        $rating = Rating::find($id);

        return view('dashboard.rating.show', compact('rating'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): view
    {
        $rating = Rating::find($id);

        return view('dashboard.rating.edit', compact('rating'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Rating $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating): RedirectResponse
    {
        request()->validate(Rating::$rules);

        $rating->update($request->all());

        return redirect()->route('ratings.index')
            ->with('success', 'Rating updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $rating = Rating::find($id)->delete();

        return redirect()->route('ratings.index')
            ->with('success', 'Rating deleted successfully');
    }
}
