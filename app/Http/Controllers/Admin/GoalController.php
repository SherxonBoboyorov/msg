<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateGoal;
use App\Http\Requests\Admin\UpdateGoal;
use App\Models\Goal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $goals = Goal::orderBy('id')->get();
        return view('admin.goal.index', compact('goals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.goal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateGoal  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGoal $request)
    {
        $data = $request->all();

        $data['image'] = Goal::uploadImage($request);

        if (Goal::create($data)) {
            return redirect()->route('goal.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('goal.index')->with('message', 'failed to add successfully');
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
        $goal = Goal::find($id);
        return view('admin.goal.edit', compact('goal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateGoal  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGoal $request, $id)
    {
        $goal = Goal::find($id);

        $data = $request->all();

        $data['image'] = Goal::updateImage($request, $goal);

        if ($goal->update($data)) {
            return redirect()->route('goal.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('goal.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $goal = Goal::find($id);

        if (File::exists(public_path() . $goal->image)) {
            File::delete(public_path() . $goal->image);
        }

        if ($goal->delete()) {
            return redirect()->route('goal.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('goal.index')->with('message', "failed to delete successfully");
    }
}
