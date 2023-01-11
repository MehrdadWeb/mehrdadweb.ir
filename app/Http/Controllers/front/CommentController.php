<?php
//سمت کاربر - front end
// article.blade.php
namespace App\Http\Controllers\front;

use App\frontmodels\Article;
use App\frontmodels\Comment;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\CommentSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class CommentController extends Controller
{


    public function store(Article $article, Request $request)
    {


        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
            recaptchaFieldName() => recaptchaRuleName()
        ]);
        $article->comments()->create(
            [
                'name' => $request->name,
                'email' => $request->email,
                'body' => $request->body,
                'article_name' => $article->name
            ]
        );

        Mail::to($request->email)->send(new CommentSent($request, $article));

        $msg = 'نظر شما با موفقیت ثبت  شد و پس از تایید مدیریت سایت ، نمایش داده میشود';
        return back()->with('success', $msg);
    }
}
