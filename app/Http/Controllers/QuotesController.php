<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NewQuote;
use App\Mail\ReceivedQuote;
use App\Models\Quote;
use Mail;

class QuotesController extends Controller
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
        $arrPackage = array(
            1 => "Branding - Starter",
            2 => "Branding - Professional",
            3 => "Branding - Enterprise",
            4 => "Website - Essential",
            5 => "Website - Premium",
            6 => "Website - Enterprise",
            7 => "eCommerce Basic",
            8 => "eCommerce Standard",
            9 => "eCommerce Extensive",
            10 => "eCommerce Enterprise",
            11 => "Maintenance - The Bare Necessities",
            12 => "Maintenance - The Extra",
            13 => "Maintenance - The Lot",
            14 => "Premium Development",
            15 => "Deliverables - Logo Design",
            16 => "Deliverables - Stationery Sets",
            17 => "Deliverables - Email Marketing",
            18 => "Deliverables - Sales Deck",
            19 => "Deliverables - Signage",
            20 => "Deliverables - Vehicle Wraps",
            21 => "Deliverables - Packaging",
            22 => "Deliverables - Other",
//            23 => "Development - Web Apps",
//            24 => "Development - Mobile Apps",
        );

        $newQuote = new Quote;
        $newQuote->package = $arrPackage[$request->input('quote_select')];
        $newQuote->name = $request->input('quote_name');
        $newQuote->business = $request->input('quote_business');
        $newQuote->email = $request->input('quote_email');
        $newQuote->tel = $request->input('quote_tel');
        $newQuote->mobile = $request->input('quote_mobile');
        $newQuote->project = $request->input('quote_message');

        $token = $request->get('g-recaptcha-response');
        die($newQuote->package);

        $newQuote->score = RecaptchaV3::verify($token, 'quote');

        if ($newQuote->score > 0.5) {
            Mail::to('contact@1vinedesign.com.au')->send(new NewQuote($newQuote));
            Mail::to($newQuote['email'])->send(new ReceivedQuote());

            return redirect()->back()->with(['success' => 'Quote Successful']);
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
