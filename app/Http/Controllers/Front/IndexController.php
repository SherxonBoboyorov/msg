<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCallback;
use App\Models\Callback;
use App\Models\Company;
use App\Models\Department;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('created_at', 'DESC')->get();
        $companies = Company::all();
        return view('front.index', compact(
            'sliders',
            'companies',
        ));
    }


    public function list()
    {
        $departments = Department::orderBy('created_at', 'DESC')->get();
        return view('front.index', compact(
          'departments'
        ));
    }

    public function show($slug)
    {
        $department = Department::where('slug_de', $slug)
        ->orWhere('slug_en', $slug)
        ->orWhere('slug_ru', $slug)
        ->first();

        return view('front.departments', compact(
            'department'
        ));
    }


    public function callback(CreateCallback $request)
    {
        $data = $request->all();

        $data['image'] = Callback::uploadImage($request);

        dd($request->all());

        if (Callback::create($data)) {
           return back()->with('message', 'Your application has been successfully sent');
        }
         return back()->with('message', 'unable to sending');
    }
}
