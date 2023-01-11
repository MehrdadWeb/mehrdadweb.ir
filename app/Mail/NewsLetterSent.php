<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsLetterSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $news;
    //public $article;
    public function __construct($news)
    {
        $this->news = $news;
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
            ->subject('ارسال ایمیل خبرنامه')
            ->view('mails.newsletter')->with([
                'email' => $this->news->email
            ]);
    }
}
