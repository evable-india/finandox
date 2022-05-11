<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactus;
use Illuminate\Support\Facades\Mail;


class ContactusController extends Controller
{

    public function index()
    {
        return view('component.contact');
    }

    public function store(Request $request)
    {
        $data = array(
            'name_data'  => $request->name,
            'email_data' => $request->email,
            'message_data' => $request->message
        );

        Mail::send('mail', $data, function ($message) use ($request) {
            $message->to('help@cashand.in', 'Cashand')->subject('New Enquiry received ' . $request->name);
            $message->from($request->email, $request->name);
        });
        
        Contactus::create($request->all());
        return redirect()->back()->with('success', 'Email has been sent successfully...');
    }
}
