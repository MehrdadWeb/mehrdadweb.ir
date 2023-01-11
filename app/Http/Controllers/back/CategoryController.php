<?php

namespace App\Http\Controllers\back;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::orderby('id', 'ASC')->paginate(5);
        return view('back.categories.categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //درست کردن فرم برای وارد کردن اطلاعات دسته بندی جدید
        //فرم خالی می آورد
        //dd('are alan oomadim');
        return view('back.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //اطلاعات وارد شده ی دسته بنی جدید در فرم را ذخیره و وارد دیتابیس می کند.
        //dd($request);
        /*ایجاد شده create.blade.php تمام فیلد های فرم کتگوری جدید که توسط 
          ریخته می شوند $request درون 
        */
        //Start_$validation
        // $validatedData => create.blade.php
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید.',
            'slug.unique' => 'فیلد نام مستعار  تکراری است لطفا آن را عوض کنید.',
            'slug.required' => 'فیلد نام مستعار اجباری است',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ], $messages);
        //End_$validation
        /*تمام فیلد های کتگوری جدید را از
        $request
        داخل
         $category 
          می ریزیم*/
        /*$category = new Category([
            'name' => $request->get('name'),
            'slut' => $request->get('slut'),
        ]);//A1*/
        $category = new Category(); //A2
        /*ذخیره کتگوری جدید در دیتابیس*/
        try {
            //$category->save();//A1
            $category->create($request->all()); //A2
            $msg = "ذخیره ی دسته بندی جدید با موفقیت انجام شد.";
            return redirect(route('admin.categories'))->with('success', $msg);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case '23000':
                    $msg = "نام مستعار وارد شده تکراری است.";
                    break;
            }
            return redirect(route('admin.categories'))->with('warning', $msg);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
        return view('back.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
        //بعد از edit تغییرات رو ذخیره میکند
        //Start_$validation
        // $validatedData => create.blade.php
        $messages = [
            'name.required' => 'فیلد عنوان را وارد نمایید.',
            'slug.unique' => 'فیلد نام مستعار  تکراری است لطفا آن را عوض کنید.',
            'slug.required' => 'فیلد نام مستعار اجباری است',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:categories',
        ], $messages);
        //End_$validation
        /*'name' => $request->get('name'),
        'slut' => $request->get('slut'),
        /*ذخیره تغیرات در دیتابیس*/
        try {
            //$category->save(); //A1
            $category->update($request->all()); //A2
            $msg = "ویرایش با موفقیت انجام شد .";
            return redirect(route('admin.categories'))->with('success', $msg);
        } catch (Exception $exception) {
            switch ($exception->getCode()) {
                case '23000':
                    $msg = "نام مستعار وارد شده تکراری است.";
                    break;
            }
            return redirect(route('admin.categories.edit'))->with('warning', $msg);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        try {
            $category->delete();
        } catch (Exception $exception) {
            return redirect(route('admin.categories'))->with('warning', $exception->getCode());
        }

        $msg = "آیتم مورد نظر حذف گردید .";
        return redirect(route('admin.categories'))->with('success', $msg);
    }
}
