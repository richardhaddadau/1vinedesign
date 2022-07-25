<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use App\Mail\NewQuote;
use App\Mail\ReceivedQuote;
use App\Models\Quote;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $arrPackage = array(
            1 => "Branding - The Starter",
            2 => "Branding - The Professional",
            3 => "Branding - The Premium",
            4 => "Website - Essentials",
            5 => "Website - The Premium",
            6 => "Website - The Enterprise",
            7 => "eCommerce - The Standard",
            8 => "eCommerce - The Extensive",
            9 => "Maintenance - The Bare Necessities",
            10 => "Maintenance - The Extra",
            11 => "Maintenance - The Lot",
            12 => "SEO - One-Way",
            13 => "SEO - Combative",
            14 => "TouchPoints - Logo Design",
            15 => "TouchPoints - Stationery Sets",
            16 => "TouchPoints - Email Marketing",
            17 => "TouchPoints - Sales Deck",
            18 => "TouchPoints - Signage",
            19 => "TouchPoints - Vehicle Wraps",
            20 => "TouchPoints - Packaging",
            21 => "TouchPoints - Other"
        );

        $newQuote = new Quote;
        $newQuote->package = $arrPackage[$request->input('quote_select')];
        $newQuote->name = $request->input('quote_name');
        $newQuote->business = $request->input('quote_business');
        $newQuote->email = $request->input('quote_email');
        $newQuote->tel = $request->input('quote_tel');
        $newQuote->mobile = $request->input('quote_mobile');
        $newQuote->project = $request->input('quote_message');

        $token = $request->get('h-recaptcha-response');

        $data = array(
            'secret' => env('HCAPTCHA_SECRET'),
            'response' => $token
        );

        $response = Http::post('https://hcaptcha.com/siteverify', [$data]);

//        if ($response['success'] && ($response['score'] > 0.5)) {
            Mail::to('contact@1vinedesign.com.au')->send(new NewQuote($newQuote));
            Mail::to($newQuote['email'])->send(new ReceivedQuote());

            return redirect()->back()->with(['success' => 'Quote Successful']);
//        }
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
