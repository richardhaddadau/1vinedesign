<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact;
use App\Mail\ReceivedContact;
use App\Models\Contact;
use Mail;

class ContactsController extends Controller
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
        $newContact = new Contact;
        $newContact->name = $request->input('contact_name');
        $newContact->email = $request->input('contact_email');
        $newContact->project = $request->input('contact_message');

        $token = $request->get('g-recaptcha-response');

        $newContact->score = RecaptchaV3::verify($token, 'contact');

        if ($newContact->score > 0.5) {
            Mail::to('contact@1vinedesign.com.au')->send(new NewContact($newContact));
            Mail::to($newContact['email'])->send(new ReceivedContact());

            return redirect()->back()->with(['success' => 'Contact Successful']);
        } else {
            return abort(400, 'Uh-oh! Google ReCaptcha thinks you\'re a robot. Try again, maybe?');
        }
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
