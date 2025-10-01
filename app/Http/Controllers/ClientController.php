<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();
        // $clients = Client::pagination(5);

        return response()->json([
            'success' => true,
            'message' => 'Success',
            'data'    => $clients,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $client = new Client();

        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;

        $client->save();

        return response()->json([
            'success' => true,
            'message' => 'Success',
            'data'    => $client,
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $client = Client::find($id);

        return response()->json([
            'success' => true,
            'message' => 'Success',
            'data'    => $client,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);

        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;

        $client->save();

        return response()->json([
            'success' => true,
            'message' => 'Success',
            'data'    => $client,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        $client->delete();

        return response()->json([
            'status' => 'ok',
            'message'=> 'success',
        ], 200);
    }
}
