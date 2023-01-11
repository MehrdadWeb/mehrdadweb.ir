<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationData;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $pagetitle = 'ویرایش پروفایل';
        return view('front.auth.profile', compact('pagetitle', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Illuminate\Http\Request::validate
     * @param  int  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if (!empty($request->password)) {
            $messages = [
                'name.required' => 'فیلد نام را وارد نمایید.',
                //'name.unique' => 'فیلد نام تکراری است لطفا نام را عوض کنید.',
                //'name.max' => 'تعداد حروف مجاز حداکر 20 کاراکتر است.',
                'email.required' => 'فیلد ایمیل را وارد نمایید.',
                //'email.unique' => 'فیلد ایمیل تکراری است لطفا ایمیل را عوض کنید.',
                'phone.required' => 'شماره تلفن را وارد نمایید.',
                //'phone.unique' => 'شماره تلفن تکراری است لطفا تلفن را عوض کنید.',
                //'phone.max' => 'تعداد ارقام مجاز حداکر 14 رقم می‌باشد.',
                'password.min' => 'پسورد حداقل باید 8 رقم باشد',
                'password_confirmation.min' => 'پسورد حداقل باید 8 رقم باشد',
            ];
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'password' => 'min:8',
                'password_confirmation' => 'min:8'
            ], $messages);

            $password = Hash::make($request->password);
            $user->password = $password;
        } else {
            $messages = [
                'name.required' => 'فیلد نام را وارد نمایید.',
                //'name.unique' => 'فیلد نام تکراری است لطفا نام را عوض کنید.',
                //'name.max' => 'تعداد حروف مجاز حداکر 20 کاراکتر است.',
                'email.required' => 'فیلد ایمیل را وارد نمایید.',
                //'email.unique' => 'فیلد ایمیل تکراری است لطفا ایمیل را عوض کنید.',
                'phone.required' => 'شماره تلفن را وارد نمایید.',
                //'phone.unique' => 'شماره تلفن تکراری است لطفا تلفن را عوض کنید.',
                //'phone.max' => 'تعداد ارقام مجاز حداکر 14 رقم می‌باشد.'
            ];
            $validatedData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
            ], $messages);
        }

        //End_$validation
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone; //َA1
        /*ذخیره تغیرات در دیتابیس*/
        try {
            $user->save(); //A1
            //$user > update($request->all()); //A2
        } catch (Exception $exception) {
            return redirect()->back()->with('warning', $exception->getCode());
        }
        $msg = "ویرایش با موفقیت انجام شد .";
        return redirect(route('home'))->with('success', $msg);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
