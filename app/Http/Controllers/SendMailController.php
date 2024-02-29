<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function send_emails($id)
    {
        $newsletters = Newsletter::where('id', $id)->first();
        $emailDetails = [
            'title' => $newsletters->title,
            'image' => $newsletters->image,
            'content' => $newsletters->content,
            'link' => $newsletters->link,
        ];
        $job = (new SendMailJob($emailDetails));
        dispatch($job);
        // dd('Emails sent successfully');
        return back()->with('success', 'Emails sent successfully');
    }
}
