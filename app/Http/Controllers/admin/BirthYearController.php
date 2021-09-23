<?php

namespace App\Http\Controllers\admin;

use App\Models\BirthYear;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BirthYear\BirthYearStoreRequest;
use App\Http\Requests\BirthYear\BirthYearUpdateRequest;

class BirthYearController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $birthYears = BirthYear::all()->sortByDesc('id');
        return view('admin.birth_year.index', compact('birthYears'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.birth_year.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BirthYearStoreRequest $request, BirthYear $birthYear)
    {
        $birthYear->title = $request->title;
        $birthYear->save();
        return redirect()->route('birth_year.index');
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
        $birthYear = BirthYear::find($id);
        return view('admin.birth_year.edit', compact('birthYear'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BirthYearUpdateRequest $request, BirthYear $birthYear)
    {
        $birthYear->title = $request->title;
        $birthYear->save();
        return redirect()->route('birth_year.index');       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(BirthYear $birthYear)
    {
        $birthYear->delete();
        return redirect()->route('birth_year.index');
    }
}
