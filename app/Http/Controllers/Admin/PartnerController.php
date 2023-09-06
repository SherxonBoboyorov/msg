<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePartner;
use App\Http\Requests\Admin\UpdatePartner;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::orderBy('id')->paginate(10);
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreatePartner  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePartner $request)
    {
        $data = $request->all();

        $data['image'] = Partner::uploadImage($request);

        if (Partner::create($data)) {
            return redirect()->route('partner.index')->with('message', 'added successfully!!!');
        }
        return redirect()->route('partner.index')->with('message', 'failed to add successfully');
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
        $partner = Partner::find($id);
        return view('admin.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdatePartner $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartner $request, $id)
    {
        $partner = Partner::find($id);

        $data = $request->all();

        $data['image'] = Partner::updateImage($request, $partner);

        if ($partner->update($data)) {
            return redirect()->route('partner.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('partner.index')->with('message', 'failed to update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::find($id);

        if (File::exists(public_path() . $partner->image)) {
            File::delete(public_path() . $partner->image);
        }

        if ($partner->delete()) {
            return redirect()->route('partner.index')->with('message', "deleted successfully!!!");
        }

        return redirect()->route('partner.index')->with('message', "failed to delete successfully");
    }
}
