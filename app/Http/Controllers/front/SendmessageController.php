<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Sendmessage;
use Illuminate\Http\Request;
use App\frontmodels\Newsletter;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendmessageSent;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationData;
use Illuminate\Support\Facades\Hash;


class SendmessageController extends Controller
{

    public function index(Request $request)
    {
        $messages = [
            'subject' => 'write youre subject موضوع پیام خود را وارد نمایید.',
            'description' => 'write youre subject متن پیام خود را وارد نمایید.',
        ];
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'description' => 'required',
        ], $messages);
        $adminemail = "mehrdadmmg2012@gmail.com";
        Mail::to($adminemail)->send(new SendmessageSent($request));
        return redirect()->back()->with('success', 'Thanks For Message سپاس از پیام شما .');
    }
}
