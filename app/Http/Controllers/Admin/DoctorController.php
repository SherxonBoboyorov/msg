<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDoctor;
use App\Http\Requests\Admin\UpdateDoctor;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id')->get();
        return view('admin.doctor.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDoctor  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDoctor $request)
    {
        $data = $request->all();

        if (Doctor::create($data)) {
            return redirect()->route('doctor.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('doctor.index')->with('message', 'failed to add successfully');
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
        $doctor = Doctor::find($id);
        return view('admin.doctor.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDoctor  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctor $request, $id)
    {
        $doctor = Doctor::find($id);

        $data = $request->all();

        if ($doctor->update($data)) {
            return redirect()->route('doctor.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('doctor.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor = Doctor::find($id);

        if ($doctor->delete()) {
            return redirect()->route('doctor.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('doctor.index')->with('message', "failed to delete successfully");
    }
}
