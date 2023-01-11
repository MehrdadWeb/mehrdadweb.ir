<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendmessageSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $message;
    //public $article;
    public function __construct($message)
    {
        $this->message = $message;
        //$this->article = $article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@mehrdadweb.ir')
            ->subject('ارسال پیام از کاربران')
            ->view('mails.sendmessage')->with([
                'email' => $this->message->email,
                'name' => $this->message->name,
                'phone' => $this->message->phone,
                'subject' => $this->message->description
            ]);
    }
}
