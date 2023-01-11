<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Database;
use App\Models\Query;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class FormController extends Controller
{
    public function index()
    {

        //$databases = Database::all()->pluck('name', 'id');
        $forms = Form::orderby('id', 'ASC')->paginate(20);
        $databases = Database::orderby('id', 'ASC')->paginate(20);
        return view('front.project.project-1.forms', compact('forms', 'databases'));
    }
    public function create()
    {
        // $categories = Category::all()->pluck('name', 'id');
        // return view('back.articles.create', compact('categories'));
        $databases = Database::orderby('id', 'ASC')->paginate(20);
        //$databases = Database::all()->pluck('name', 'id');
        // $users = User::all()->pluck('name', 'id');
        return view('front.project.project-1.form', compact('databases'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Form $form)
    {
        //dd($request);
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید'
        ];
        $validatedData = $request->validate([
            'name' => 'required|unique:forms',
            // 'user_id' => 'required',
            // 'product_id' => 'required',
            // 'product_name' => 'required',
        ], $messages);

        // $form = new Form();
        try {
            $form->create($request->all());
        } catch (Exception $exception) {

            return redirect()->back()->with('warning', $exception->getCode());
        }
        $msg = "ذخیره ی فرم  جدید با موفقیت انجام شد";
        return redirect()->back()->with('success', $msg);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function show(Database $database)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function edit(Database $database)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Database  $database
     * @return \Illuminate\Http\Response
     */
    public function destroy(Database $database)
    {
        //
    }
}
