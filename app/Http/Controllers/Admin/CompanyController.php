<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCompany;
use App\Http\Requests\Admin\UpdateCompany;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderBy('id')->get();
        return view('admin.company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateCompany  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCompany $request)
    {
        $data = $request->all();

        $data['image'] = Company::uploadImage($request);

        if (Company::create($data)) {
            return redirect()->route('company.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('company.index')->with('message', 'failed to add successfully');
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
        $company = Company::find($id);
        return view('admin.company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateCompany  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompany $request, $id)
    {
        $company = Company::find($id);

        $data = $request->all();

        $data['image'] = Company::updateImage($request, $company);

        if ($company->update($data)) {
            return redirect()->route('company.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('company.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);

        if (File::exists(public_path() . $company->image)) {
            File::delete(public_path() . $company->image);
        }

        if ($company->delete()) {
            return redirect()->route('company.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('company.index')->with('message', "failed to delete successfully");
    }
}
