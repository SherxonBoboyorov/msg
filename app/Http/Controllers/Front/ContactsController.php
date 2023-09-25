<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFile;
use App\Models\Calback;
use App\Models\Department;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts()
    {
        return view('front.contacts');
    }

    public function list()
    {
        $departments = Department::orderBy('created_at', 'DESC')->get();
        return view('front.contacts', compact(
          'departments'
        ));
    }

    public function show($slug)
    {
        $department = Department::where('slug_de', $slug)
        ->orWhere('slug_en', $slug)
        ->orWhere('slug_ru', $slug)
        ->first();

        return view('front.departments', [
            'department' => $department
        ]);
    }

                    /**
     * @throws ValidationException
     */
    public function saveCallback(Request $request): RedirectResponse
    {
        $data =  $request->validate([
            'fullname' => 'required',
            'gmail' => 'required',
            'phone_number' => 'required',
            'comment' => 'required',
            'image' =>  'required',
        ]);
       Calback::create($data);

        return back()->with('message', 'unable to sending');

    }

}
