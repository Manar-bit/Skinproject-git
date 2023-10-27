<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Mail;

class ContactController extends Controller
{
    public function contact(){
        return view('contact');
}

public function contactPost(Request $request){
    $this->validate($request, [
                   'surname' => 'required',
                    'firstname' => 'required',
                    'email' => 'required|email',
                    'number' => 'required',
                    'comment' => 'required'
            ]);

    Mail::send('email', [
            'surname' => $request->get('surname'),
            'firstname' => $request->get('firstname'),
            'email' => $request->get('email') ,
            'number' => $request->get('number') ,
            'comment' => $request->get('comment') 
        ],
            function ($message) {
                    $message->from('youremail@your_domain');
                    $message->to('youremail@your_domain', 'Your Name')
                    ->subject('Your Website Contact Form');
    });

    return back()->with('success', 'Thanks for contacting me, I will get back to you soon!');

}
}
