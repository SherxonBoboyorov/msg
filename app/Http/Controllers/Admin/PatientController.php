<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePatient;
use App\Http\Requests\Admin\UpdatePatient;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = Patient::orderBy('id')->get();
        return view('admin.patient.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePatient  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePatient $request)
    {
        $data = $request->all();

        if (Patient::create($data)) {
            return redirect()->route('patient.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('patient.index')->with('message', 'failed to add successfully');
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
        $patient = Patient::find($id);
        return view('admin.patient.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePatient  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatient $request, $id)
    {
        $patient = Patient::find($id);

        $data = $request->all();

        if ($patient->update($data)) {
            return redirect()->route('patient.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('patient.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);

        if ($patient->delete()) {
            return redirect()->route('patient.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('patient.index')->with('message', "failed to delete successfully");
    }
}
