<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\CallbackMe;
use App\Models\Calback;
use App\Models\Company;
use App\Models\Department;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

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

    public function show($id)
    {
        $department = Department::find($id);

        return view('front.departments', compact(
            'department'
        ));
    }


    public function storeContactForm(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'gmail' => 'required',
            'phone_number' => 'required',
            'comment' => 'required',
            'image' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if (!File::exists(public_path() . '/upload/files/' . date('d-m-Y')))
            {
                File::makeDirectory(public_path() . '/upload/files/' . date('d-m-Y'), $mode = 0777, true, true);
            }
            $file->move(public_path() . '/upload/files/' . date('d-m-Y'), $file->getClientOriginalName());
            $image = '/upload/files/' . date('d-m-Y') . '/' . $file->getClientOriginalName();
        }


        $input = $request->all();


        Calback::create($input);

        Mail::send('emailTemplate', array(
            'fullname' => $input['fullname'],
            'gmail' => $input['gmail'],
            'phone_number' => $input['phone_number'],
            'comment' => $input['comment'],
            'image' => $input['image']
        ), function($message) use ($request){
            $message->from($request->gmail);
            $message->to('sherxonbabayar@gmail.com', 'Contact us')->subject($request->get('fullname'));
           
        });

        return back()->with('message', 'unable to sending');
    }

}
