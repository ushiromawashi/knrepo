<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ContactFormRequest;

use Mail;

class PagesController extends Controller

{
    public function create()
    {
        return view('pages.contact');
    }

    public function store(ContactFormRequest $data)
    {

        Mail::send('email.contact', ['data' => $data->all()], function ($message) use ($data) {
            $message
                ->from($data->get('emails'))
                ->to(env('CONTACT_EMAIL'))
                ->subject($data->title);
        });


        return redirect()->action('PagesController@store')->with(['message' => 'Dziękujemy za kontakt. Odpiszemy jak najszybicej.']);
    }
}

