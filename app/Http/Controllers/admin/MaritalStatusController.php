<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\MaritalStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\MaritalStatus\MaritalStatusStoreRequest;
use App\Http\Requests\MaritalStatus\MaritalStatusUpdateRequest;

class MaritalStatusController extends Controller
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
        $maritalStatus = MaritalStatus::all()->sortByDesc('id');
        return view('admin.marital_status.index', compact('maritalStatus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marital_status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaritalStatusStoreRequest $request, MaritalStatus $maritalStatus)
    {
        $maritalStatus->title = $request->title;
        $maritalStatus->save();

        return redirect()->route('marital_status.index');
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
        $maritalStatus = maritalStatus::find($id);
        return view('admin.marital_status.edit', compact('maritalStatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaritalStatusUpdateRequest $request, MaritalStatus $maritalStatus)
    {
        $maritalStatus->title = $request->title;
        $maritalStatus->save();

        return redirect()->route('marital_status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(MaritalStatus $maritalStatus)
    {
        $maritalStatus->delete();
        return redirect()->route('marital_status.index');
    }
}
