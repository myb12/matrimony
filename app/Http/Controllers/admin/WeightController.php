<?php

namespace App\Http\Controllers\admin;

use App\Models\Weight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Weight\WeightStoreRequest;
use App\Http\Requests\Weight\WeightUpdateRequest;

class WeightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weights = Weight::all()->sortByDesc('id');
        return view('admin.weight.index', compact('weights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.weight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WeightStoreRequest $request, Weight $weight)
    {
        $weight->title = $request->title;
        $weight->save();
        return redirect()->route('weight.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $weight = Weight::find($id);
        return view('admin.weight.edit', compact('weight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(WeightUpdateRequest $request, Weight $weight)
    {
        $weight->title = $request->title;
        $weight->save();
        return redirect()->route('weight.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weight $weight)
    {
       $weight->delete();
       return redirect()->route('weight.index');
    }
}
