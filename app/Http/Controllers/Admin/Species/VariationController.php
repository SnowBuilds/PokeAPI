<?php

namespace App\Http\Controllers\Admin\Species;

use App\Http\Controllers\Controller;
use App\Http\Resources\Admin\Pokemon\PokemonResource;
use App\Http\Resources\Admin\Species\Pokemon\VariationResource;
use App\Models\Species;
use App\Models\Pokemon;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VariationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Species $species)
    {
        return Inertia::resource('Admin/Pokemon/Index', [
            'pokemon' => PokemonResource::collection(
                $species->pokemon()
                ->with('species')
                ->paginate()
            )
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Species $species, Pokemon $pokemon)
    {
        return Inertia::resource('Admin/Species/Pokemon/Edit', [
            'pokemon' => VariationResource::make(
                $pokemon
            )
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
