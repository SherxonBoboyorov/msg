<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\OfferFeedbackRequest;
use App\Mail\OfferFeedbackMail;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OfferFeedbackController extends Controller
{
    public function __invoke(OfferFeedbackRequest $request)
    {
        $data = $request->all();

        $offerFeedback = Offer::create($data);

        Mail::to('medicalserviceoptimum@gmail.com')->send(new OfferFeedbackMail($offerFeedback));

        return back()->with('message', 'Success');
    }
}
