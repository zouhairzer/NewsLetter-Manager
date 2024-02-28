<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index()
    {
        //the view of show all news letters
        return view('send_emails');
    }

    public function send_emails(Request $request)
    {
        $newsletters = Newsletter::where('id', $request->id)->first();
        $emailDetails = [
            'title' => $newsletters->title,
            'image' => $newsletters->image,
            'content' => $newsletters->content,
            'link' => $newsletters->link,
        ];
        $job = (new SendMailJob($emailDetails));
        dispatch($job);
        return back()->with('success', 'Emails sent successfully');
    }
}
