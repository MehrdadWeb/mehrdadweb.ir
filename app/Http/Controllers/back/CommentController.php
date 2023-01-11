<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Article;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;


class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $comments = Comment::orderby('id', 'ASC')->paginate(20);
        return view('back.comments.comments', compact('comments'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
        //$articles = Article::all()->pluck('name', 'id');
        return view('back.comments.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    //$comment->categories()->sync($request->categories);
    public function update(Request $request, Comment $comment)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ]);
        try {
            $comment->update($request->all());
        } catch (Exception $exception) {
            return redirect(route('admin.comments.edit'))->with('warning', $exception->getCode());
        }

        $msg = "به روز رسانی کامنت  با موفقیت انجام شد";
        return redirect(route('admin.comments'))->with('success', $msg);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Articles  $articles
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
        try {
            $comment->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.comments'))->with('warning', $exception->getCode());
        }

        $msg = "کامنت مورد نظر حذف گردید .";
        return redirect(route('admin.comments'))->with('success', $msg);
    }
    public function updatestatus(Comment $comment)
    {
        //
        if ($comment->status == 1) {
            $comment->status = 0;
        } else {
            $comment->status = 1;
        }
        $comment->save();
        $msg = " بروزرسانی وضعیت با موفقیت انجام گردید .";
        return redirect(route('admin.comments'))->with('success', $msg);
    }
}
