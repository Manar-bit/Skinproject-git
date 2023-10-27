<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Validator;


class ContactController extends Controller
{
    public function contact(){
        return view('contact.contact');
}

public function sendMailcontact(Request $request)
{
    $validated = $this->validate($request, [
        'surname' => 'required',
        'firstname' => 'required',
        'email' => 'required|email',
        'number' => 'required',
        'comment' => 'required'], [
        'g-recaptcha-response.required' => __('S\'il vous plaît assurez-vous que vous êtes un humain.')
    ]);


    Mail::send('contact.sendMailcontact', $validated, function ($m) {
        $m->to(env('MAIL_CONTACT_TO'));
        $m->subject('Contact');
    });
    return array('message' => 'Votre message a été enregistré avec succès', 'type' => 'success');

}


}
