<?php
// front\CommentController@store => new CommentSent($request, $article)
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CommentSent extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    //__construct($comment, $article) = new CommentSent($request, $article)
    public $comment;
    public $article;
    public function __construct($comment, $article)
    {
        $this->comment = $comment;
        $this->article = $article;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@mehrdadweb.ir')
            ->subject('کامنت شما دریافت شد')
            ->view('mails.comment')->with([
                'articleTitle' => $this->article->name,
                'commentBody' => $this->comment->body,
                'userName' => $this->comment->name
            ]);
        // ->text('mails.coment_plain');
    }
}
