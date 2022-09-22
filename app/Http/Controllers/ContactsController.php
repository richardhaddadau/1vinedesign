<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewContact;
use App\Mail\ReceivedContact;
use App\Models\Contact;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $newContact = new Contact;
        $newContact->name = $request->input('contact_name');
        $newContact->email = $request->input('contact_email');
        $newContact->project = $request->input('contact_message');

        $dataSecret = env('HCAPTCHA_SECRET');
        $dataResponse = $request->get('h-captcha-response');
        $dataIP = $request->ip();

        $data = array(
            'secret' => $dataSecret,
            'response' => $dataResponse,
            'remoteip' => $dataIP
        );

        $verify = curl_init();

        curl_setopt($verify, CURLOPT_URL, 'https://hcaptcha.com/siteverify');
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($verify);
        $responseJson = json_decode($response);

        if ($responseJson->success) {
            Mail::to('contact@1vinedesign.com.au')->send(new NewContact($newContact));
            Mail::to($newContact['email'])->send(new ReceivedContact());

            return redirect()->back()->with(['success' => 'Contact Successful']);
        } else {
            return redirect()->back()->with(['success' => 'Oops! Something went wrong. Please try again later.']);
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
