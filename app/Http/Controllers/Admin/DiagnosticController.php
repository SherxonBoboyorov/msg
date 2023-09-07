<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDiagnostic;
use App\Http\Requests\Admin\UpdateDiagnostic;
use App\Models\Diagnostic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DiagnosticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $diagnostics = Diagnostic::orderBy('id')->paginate(12);
        return view('admin.diagnostic.index', compact('diagnostics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.diagnostic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDiagnostic  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDiagnostic $request)
    {
        $data = $request->all();

        $data['image'] = Diagnostic::uploadImage($request);

        if (Diagnostic::create($data)) {
            return redirect()->route('diagnostic.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('diagnostic.index')->with('message', 'failed to add successfully');
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
        $diagnostic = Diagnostic::find($id);
        return view('admin.diagnostic.edit', compact('diagnostic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDiagnostic  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDiagnostic $request, $id)
    {
        $diagnostic = Diagnostic::find($id);

        $data = $request->all();

        $data['image'] = Diagnostic::updateImage($request, $diagnostic);

        if ($diagnostic->update($data)) {
            return redirect()->route('diagnostic.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('diagnostic.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $diagnostic = Diagnostic::find($id);

        if (File::exists(public_path() . $diagnostic->image)) {
            File::delete(public_path() . $diagnostic->image);
        }

        if ($diagnostic->delete()) {
            return redirect()->route('diagnostic.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('diagnostic.index')->with('message', "failed to delete successfully");
    }
}
