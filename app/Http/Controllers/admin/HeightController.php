<?php

namespace App\Http\Controllers\admin;

use App\Models\Height;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Height\HeightStoreRequest;
use App\Http\Requests\Height\HeightUpdateRequest;

class HeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heights = Height::all()->sortByDesc('id');
        return view('admin.height.index', compact('heights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.height.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeightStoreRequest $request, Height $height)
    {
        $height->title = $request->title;
        $height->save();
        return redirect()->route('height.index');
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
        $height = Height::find($id);
         return view('admin.height.edit', compact('height'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HeightUpdateRequest $request, Height $height)
    {
        $height->title = $request->title;
        $height->save();
        return redirect()->route('height.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Height $height)
    {
        $height->delete();
        return redirect()->route('height.index');
    }
}
