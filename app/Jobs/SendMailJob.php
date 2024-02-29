<?php

namespace App\Jobs;

use App\Models\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail as FacadesMail;

class SendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $emailDetails;
    /**
     * Create a new job instance.
     */
    public function __construct($emailDetails)
    {
        $this->emailDetails = $emailDetails;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $emails = Mail::all();
        $input['title'] = $this->emailDetails['title'];
        $input['image'] = $this->emailDetails['image'];
        $input['content'] = $this->emailDetails['content'];
        $input['link'] = $this->emailDetails['link'];
        // dd($input);
        foreach ($emails as $email) {
            $input['email'] = $email->email;
            FacadesMail::send('mail.sendmail', ['input' => $input], function ($message) use ($input) {
                $message->to($input['email']);
                $message->subject($input['title']);
            });
        }
    }
}
