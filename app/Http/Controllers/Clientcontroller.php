<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class Clientcontroller extends Controller
{
    public function index(){

        $clients = Client::all();

        return view('clients/index',
        ['clients'=>$clients]);  
    }

    public function show ($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.show',[
            'client' => $client
        ]);
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {

        Client::create([
            'name'=> $request->name,
            'email'=> $request->email,
        ]);

        return redirect (url('/clients'));
    }

    public function edit ($id)
    {
        $client = Client::findOrFail($id);

        return view('clients.edit',[
            'client' => $client
        ]);
    }

    public function update($id, Request $request)
    {
        client::findOrFail($id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
        ]);
        return redirect (url('/clients'));
    }

    public function delete($id){
        client::findOrFail($id)->delete();

        return redirect (url('/clients'));
    } 

}
