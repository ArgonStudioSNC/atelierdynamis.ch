<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactUsForm;
use App\Http\Requests\ContactUsFormRequest;
use App\Mail\ContactUsMail;
use App\Mail\ContactUsConfirmationMail;

class AppController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Get the SPA.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('app');
    }

    public function contactUs( ContactUsFormRequest $request )
    {
        $form = new ContactUsForm($request->all());

        Mail::send(new ContactUsMail($form));
        Mail::send(new ContactUsConfirmationMail($form));

        return response()->json(['error' => 'Error msg'], 200); // Status code here
    }
}
