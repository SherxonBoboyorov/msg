<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Offer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    public function offer()
    {
        return view('front.offer');
    }


    public function list()
    {
        $departments = Department::orderBy('created_at', 'DESC')->get();
        return view('front.offer', compact(
          'departments'
        ));
    }

    public function show($id)
    {
        $department = Department::find($id);

        return view('front.departments', [
            'department' => $department
        ]);
    }


               /**
     * @throws ValidationException
     */
    public function youSave(Request $request): RedirectResponse
    {
        $data =  $request->validate([
            'names' => 'required',
            'hospital_names' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'content' => 'required',
       ]);
        Offer::create($data);

        return back()->with('message', 'unable to sending');

    }
}
