<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
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
        $users = User::orderby('id', 'ASC')->paginate(10);
        return view('back.users.users', compact('users'));
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
        return view('back.users.profile', compact('user'));
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
            //$user->update($request->all()); //A2
        } catch (Exception $exception) {
            return redirect()->back()->with('warning', $exception->getCode());
        }
        $msg = "ویرایش با موفقیت انجام شد .";
        return redirect(route('admin.users'))->with('success', $msg);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        try {
            $user->delete();
            $msg = "آیتم مورد نظر حذف گردید .";
            return redirect(route('admin.users'))->with('success', $msg);
        } catch (Exception $exception) {
            return redirect(route('admin.users'))->with('warning', $msg);
        }
    }

    public function updatestatus(User $user)
    {
        //
        if ($user->status == 1) {
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        $user->save();
        $msg = "تغییر وضعیت با موفقیت انجام گردید .";
        return redirect(route('admin.users'))->with('success', $msg);
    }
}
