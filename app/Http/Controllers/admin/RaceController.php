<?php

namespace App\Http\Controllers\admin;

use App\Models\Race;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Race\RaceStoreRequest;
use App\Http\Requests\Race\RaceUpdateRequest;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $races = Race::all()->sortByDesc('id');
        return view('admin.race.index', compact('races'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.race.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RaceStoreRequest $request, Race $race)
    {
        $race->title = $request->title;
        $race->save();
        return redirect()->route('race.index');
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
    public function edit($id)
    {
        $race = Race::find($id);
        return view('admin.race.edit', compact('race'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RaceUpdateRequest $request, Race $race)
    {
        $race->title = $request->title;
        $race->save();
        return redirect()->route('race.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Race $race)
    {
        $race->delete();
        return redirect()->route('race.index');
    }
}
