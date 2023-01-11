<?php

namespace App\Http\Controllers\front;

use App\frontmodels\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewsLetterSent;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('font.newsletter');
    }

    public function store(Request $request)
    {
        /*if (empty($request->email)) {
            return redirect()->back()->with('failure', 'لطفا ایمیل خو را برای عضویت در خبرنامه وارد کنید');
        }*/
        $messages = [
            'email.unique' => 'شما قبلا در خبرنامه با این ایمیل ثبت نام کرده اید',
        ];
        $validatedData = $request->validate([
            'email' => 'required|unique:newsletters',
        ], $messages);

        $newsletter = new Newsletter();
        //1,2 are both correct
        //1

        /*!Newsletter::isSubscribed($request->email*/
        //Newsletter::subscribePending($request->email);
        $newsletter->create($request->all());
        Mail::to($request->email)->send(new NewsLetterSent($request));
        return redirect()->back()->with('success', 'Thanks For Subscribe شما اکنون عضو خبرنامه هستید.');

        //return redirect()->back()->with('failure', 'Sorry! You have already subscribed ');
        //2
        /*if ($request->email) {
            Mail::to($request->email)->send(new NewsletterSent($request));
            return redirect()->back()->with('success', 'Thanks For Subscribe');
        }
        return redirect()->back()->with('failure', 'Sorry! You have already subscribed ');*/
    }
}
