<?php

namespace App\Http\Controllers;

use App\Models\Key;
use Illuminate\Http\Request;

class KeyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function AllKeys()
    {
        $keys=Key::orderBy('id')->get();

        return $keys;
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'initial_key' => 'required',
            'activated_key' => 'required',
            'device_number' => 'required',
            'expiration_date' => 'required',
            'auto_renewal' => 'required',
            'order_id' => 'required',
            'key_statuses_id' => 'required',

        ]);
    
        $Key = Key::create($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $Key,
        ]);
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
         // return $request;

    $validatedData = $request->validate([
        'initial_key' => 'required',
        'activated_key' => 'required',
        'device_number' => 'required',
        'expiration_date' => 'required',
        'auto_renewal' => 'required',
        'order_id' => 'required',
        'key_statuses_id' => 'required',
    ]);

    $Key = Key::find($id);

    if (!$Key) {
        return response()->json([
            'status' => 'error',
            'message' => 'Key not found',
        ], 404);
    }

    $Key->update($validatedData);

    return response()->json([
        'status' => 'success',
        'message' => 'Key record updated successfully',
        'data' => $Key,
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Key $Key)
    {
         // return "destroooy";
         $Key->delete();

         return redirect()->route('AdminArea');
    }

    
}
