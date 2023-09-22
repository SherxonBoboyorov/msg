<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDepartment;
use App\Http\Requests\Admin\UpdateDepartment;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderBy('id')->get();
        return view('admin.department.index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.department.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDepartment  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDepartment $request)
    {
        $data = $request->all();
    
        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_uz'] = Str::slug($request->title_en, '-', 'en');
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');

        if (Department::create($data)) {
            return redirect()->route('department.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('department.index')->with('message', 'failed to add successfully');
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
        $department = Department::find($id);
        return view('admin.department.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDepartment  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartment $request, $id)
    {

        $department = Department::find($id);

        $data = $request->all();

        $data['slug_de'] = Str::slug($request->title_de, '-', 'de');
        $data['slug_uz'] = Str::slug($request->title_en, '-', 'en');
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');

        if ($department->update($data)) {
            return redirect()->route('department.index')->with('message', "pdated successfully!!!");
        }
        return redirect()->route('department.index')->with('message', "Изменено не успешно!!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);

        if ($department->delete()) {
            return redirect()->route('department.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('department.index')->with('message', "failed to delete successfully");
    }
}
