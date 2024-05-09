<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{

    private $columns=['clientName', 'phone','email','website'];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::get();
        return view('clients' , compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addClient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)                
    {
        // $client=new Client();
        // $client->clientName='Egypt air';
        // $client->phone='01146875210';
        // $client->email='Egyptair@gmail.com';
        // $client->website='https://egyptair.com';
        // $client->save();
        // return 'inserted successfully';

        // $client= new Client();
        // $client->clientname =$request->input('name');
        // $client->phone = $request->input('phone');
        // $client->email = $request->input('email');
        // $client->website = $request->input('website');
        // $client->save();
        // return 'Inserted';

        Client::create($request->only($this->columns));
        return redirect('clients');

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
}
