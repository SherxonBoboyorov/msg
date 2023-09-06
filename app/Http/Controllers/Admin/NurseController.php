<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateNurse;
use App\Http\Requests\Admin\UpdateNurse;
use App\Models\Nurse;
use Illuminate\Http\Request;

class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nurses = Nurse::orderBy('id')->get();
        return view('admin.nurse.index', compact('nurses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nurse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateNurse  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNurse $request)
    {
        $data = $request->all();

        if (Nurse::create($data)) {
            return redirect()->route('nurse.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('nurse.index')->with('message', 'failed to add successfully');
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
        $nurse = Nurse::find($id);
        return view('admin.nurse.edit', compact('nurse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateNurse  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNurse $request, $id)
    {
        $nurse = Nurse::find($id);

        $data = $request->all();

        if ($nurse->update($data)) {
            return redirect()->route('nurse.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('nurse.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nurse = Nurse::find($id);

        if ($nurse->delete()) {
            return redirect()->route('nurse.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('nurse.index')->with('message', "failed to delete successfully");
    }
}
