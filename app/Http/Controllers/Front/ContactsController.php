<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFile;
use App\Models\Callback;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function contacts()
    {
        return view('front.contacts');
    }

    public function saveCallback(CreateFile $request)
    {
        $data = $request->all();

        $data['image'] = Callback::uploadImage($request);

        if (Callback::create($data)) {
           return back()->with('message', 'Your application has been successfully sent');
        }
         return back()->with('message', 'unable to sending');
    }
}
