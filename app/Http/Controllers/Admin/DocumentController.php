<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDocument;
use App\Http\Requests\Admin\UpdateDocument;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::orderBy('id')->paginate(10);
        return view('admin.document.index', [
            'documents' => $documents
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.document.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateDocument  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDocument $request)
    {
        $data = $request->all();

        $data['image'] = Document::uploadImage($request);

        if (Document::create($data)) {
            return redirect()->route('document.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('document.index')->with('message', 'failed to add successfully');
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
    public function edit(Document $document)
    {
        $category = Category::all();
        return view('admin.document.edit', [
            'document' => $document,
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateDocument  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocument $request, $id)
    {
        $document = Document::find($id);

        $data = $request->all();

        $data['image'] = Document::updateImage($request, $document);

        if ($document->update($data)) {
            return redirect()->route('document.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('document.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);

        if (File::exists(public_path() . $document->image)) {
            File::delete(public_path() . $document->image);
        }

        if ($document->delete()) {
            return redirect()->route('document.index')->with('message', "deleted successfully!!!");
        }
        return redirect()->route('document.index')->with('message', "failed to delete successfully");
    }
}
