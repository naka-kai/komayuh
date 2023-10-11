<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiyokoRequest;
use App\Http\Requests\UpdateHiyokoRequest;
use App\Models\Hiyoko;

class HiyokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreHiyokoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHiyokoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hiyoko  $hiyoko
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $hiyoko = Hiyoko::find(1);

        return view('hiyoko.show', compact('hiyoko'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hiyoko  $hiyoko
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $hiyoko = Hiyoko::find(1);

        return view('hiyoko.edit', compact('hiyoko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHiyokoRequest  $request
     * @param  \App\Models\Hiyoko  $hiyoko
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHiyokoRequest $request)
    {
        $hiyoko = Hiyoko::find(1);

        $hiyoko->date = $request->input('date');
        $hiyoko->save();

        return redirect(route('hiyoko'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hiyoko  $hiyoko
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hiyoko $hiyoko)
    {
        //
    }
}
