<?php

namespace App\Http\Controllers;

use App\Models\Emails;
use Illuminate\Http\Request;
use App\Mail\MailFromClient;
use Illuminate\Support\Facades\Mail;

class MailFromClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contactUs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeAndSend(Request $request)                
    {
        $messages= $this->errMsg();

        $data =$request->validate(
            [
            'name'=>'required|max:100|min:5',
            'email'=>'required|email:rfc',
            'subject'=>'required',
            'contentMessage'=>'required'
            ] 
            , $messages);
            Emails::create($data);
            Mail::to('hello@example.com')->send(new MailFromClient($data));
            return 'email sent successfully!';
    }





    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    //error msgs
    public function errMsg() 
    {
         return [
            'name.required'=>'Your name is missed !!',
            'email.email'=>'please insert a valid email ',
            'subject.required'=>'Subject is missed !!',
            'contentMessage.required'=>'write your content!!',
        ];
    }
}
