<?php

namespace App\Mail;

use Illuminate\Http\Request;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendRequestAccessMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $name, $email;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        // $token =
        return $this->from('localaway@gmail.com', 'Localaway')
            ->subject('Request Access')
            ->markdown('comsite.sendLink')
            ->with([
                'name' => $this->name,
                 'link' => 'asdf'
            ]);
    }

    public function index(Request $request) {

        $this->name = $request->input('name', 'Localaway');
        $email = $request->input('email', 'localaway@team.com');
        Mail::to($email)->send(new sendRequestAccessMail());

        // return view('comsite\mailSent');

    }
}
