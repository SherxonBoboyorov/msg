<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function index()
    {
        $feedbacks = Offer::orderBy('created_at', 'DESC')->paginate(12);
        return view('admin.feedback.index', compact('feedbacks'));
    }


    public function show($id)
    {
        $feedback = Offer::find($id);
        return view('admin.feedback.show', compact('feedback'));
    }

    public function destroy($id)
    {
        $feedback = Offer::find($id);
        $feedback->delete();
        return redirect()->route('feedback.index')->with('message', "deleted successfully");
    }
}
