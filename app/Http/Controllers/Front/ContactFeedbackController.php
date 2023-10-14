<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\ContactFeedbackRequest;
use App\Mail\ContactMail;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFeedbackController extends Controller
{
    public function __invoke(ContactFeedbackRequest $request)
    {
        $data = $request->all(); 

        if (isset($data['file']) && $request->path($data['file'])) {
            $data['file'] = $request->file('file')->store('uploads/contact-feedback', 'public');
        }

        $contactFeedback = Feedback::create($data);

        Mail::to('medicalserviceoptimum@gmail.com')->send(new ContactMail($contactFeedback));

        return back()->with('message', 'Success');
    }
}
