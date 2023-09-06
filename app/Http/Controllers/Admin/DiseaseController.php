<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDisease;
use App\Http\Requests\Admin\UpdateDisease;
use App\Models\Disease;
use Illuminate\Http\Request;

class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diseases = Disease::orderBy('id')->get();
        return view('admin.disease.index', compact('diseases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.disease.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDisease  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDisease $request)
    {
        $data = $request->all();

        if (Disease::create($data)) {
            return redirect()->route('disease.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('disease.index')->with('message', 'failed to add successfully');
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
        $disease = Disease::find($id);
        return view('admin.disease.edit', compact('disease'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDisease  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisease $request, $id)
    {
        $disease = Disease::find($id);

        $data = $request->all();

        if ($disease->update($data)) {
            return redirect()->route('disease.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('disease.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $disease = Disease::find($id);

        if ($disease->delete()) {
            return redirect()->route('disease.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('disease.index')->with('message', "failed to delete successfully");
    }
}
