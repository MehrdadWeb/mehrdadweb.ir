<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;
use \Cviebrock\EloquentSluggable\Services\SlugService;

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
        $articles = Article::orderby('id', 'ASC')->paginate(20);
        return view('back.articles.articles', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all()->pluck('name', 'id');
        return view('back.articles.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید.',
            //'slug.unique' => 'فیلد نام مستعار  تکراری است لطفا آن را عوض کنید.',
            //'slug.required' => 'فیلد نام مستعار اجباری است',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            //recaptchaFieldName() => recaptchaRuleName()
            //'slug' => 'unique:categories', //required|
        ], $messages);

        /* $article = new Article([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'status' => $request->get('status'),
        ]); //A1*/
        $article = new Article(); //A2
        if (empty($request->slug)) {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->name);
        } else {
            $slug = SlugService::createSlug(Article::class, 'slug', $request->slug);
        }
        try {
            $request->merge(['slug' => $slug]);
            //$article->save(); //A1
            $article = $article->create($request->all()); //A2
            $article->categories()->attach($request->categories);
        } catch (Exception $exception) {
            /*switch ($exception->getCode()) {
                case '23000':
                    $msg = "نام مستعار وارد شده تکراری است.";
                    break;
            }*/
            return redirect(route('admin.articles.create'))->with('warning', $exception->getCode());
        }

        $msg = "ذخیره ی مطلب جدید با موفقیت انجام شد.";
        return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        $categories = Category::all()->pluck('name', 'id');
        return view('back.articles.edit', compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
        /*$messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید.',
            'slug.unique' => 'فیلد نام مستعار  تکراری است لطفا آن را عوض کنید.',
            'slug.required' => 'فیلد نام مستعار اجباری است',
        ];*/
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'unique:categories', //required|
        ]); //, $messages

        /*$article->name = $request->name;
        $article->slut = $request->slut;
        $article->description = $request->description;
        $article->status = $request->status;
        */ //A1
        try {
            //$article->save();//A1
            $article->update($request->all()); //A2
            $article->description = $request->description;
            $article->categories()->sync($request->categories);
        } catch (Exception $exception) {
            /* switch ($exception->getCode()) {
                case '23000':
                    $msg = "نام مستعار وارد شده تکراری است.";
                    break;
            }*/
            return redirect(route('admin.articles.edit'))->with('warning', $exception->getCode());
        }

        $msg = "به روز رسانی مطلب  با موفقیت انجام شد";
        return redirect(route('admin.articles'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        try {
            $article->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.articles'))->with('warning', $exception->getCode());
        }

        $msg = "مطلب مورد نظر حذف گردید .";
        return redirect(route('admin.articles'))->with('success', $msg);
    }
    public function updatestatus(Article $article)
    {
        //
        if ($article->status == 1) {
            $article->status = 0;
        } else {
            $article->status = 1;
        }
        $article->save();
        $msg = " بروزرسانی با موفقیت انجام گردید .";
        return redirect(route('admin.articles'))->with('success', $msg);
    }
}
