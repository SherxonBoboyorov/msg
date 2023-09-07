<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateContent;
use App\Http\Requests\Admin\UpdateContent;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contents = Content::orderBy('id')->get();
        return view('admin.content.index', compact('contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateContent $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContent $request)
    {
        $data = $request->all();

        if (Content::create($data)) {
            return redirect()->route('content.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('content.index')->with('message', 'failed to add successfully');
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
        $content = Content::find($id);
        return view('admin.content.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateContent  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContent $request, $id)
    {
        $content = Content::find($id);

        $data = $request->all();

        if ($content->update($data)) {
            return redirect()->route('content.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('content.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content = Content::find($id);

        if ($content->delete()) {
            return redirect()->route('content.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('content.index')->with('message', "failed to delete successfully");
    }
}
