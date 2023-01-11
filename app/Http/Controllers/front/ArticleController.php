<?php
//سمت کاربر - front end
//copy od ArticleController in \back
namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\frontmodels\Article;
use App\frontmodels\Comment;
use App\frontmodels\Category;
use App\frontmodels\User;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderby('id', 'ASC')->where('status', 1)->paginate(20);
        return view('front.articles', compact('articles'));
    }
    public function indexmehrdad()
    {
        //
        $articles = Article::orderby('id', 'ASC')->where('status', 1)->paginate(20);
        return view('front.mehrdadarticles.articles', compact('articles'));
    }


    public function show(Article $article)
    {
        //$article->slug => Article $article 
        /* $article->slug براساس  
           میشود شامل اطلاعات مطلب مورد نظر از دیتابیس Article $article
        */
        $article->increment('hit');
        //$article->increment('hit',5);
        //$article->decrement('hit',5); //امتیاز دهی مثلا
        //$article->increment('hit',1,['name'=>'این مطلب بازدید شده است.']); // ببینیم کاربر نوتیفیکیشن را دیده یا نه مثلا
        $comments = $article->comments()->where('status', 1)->get();
        return view('front.article', compact('article', 'comments'));
    }
}
