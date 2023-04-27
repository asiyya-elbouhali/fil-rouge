<?php

namespace App\Http\Controllers;

use App\Models\Gateway;
use Illuminate\Http\Request;

class GatewayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gateways = Gateway::paginate(3);

        return $gateways;
    }

    public function AllGateways()
    {
        $gateways=Gateway::orderBy('id')->get();
        return $gateways;
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
            'name' => 'required',
            'description' => 'required',
   
        ]);
    
        $Gateway = Gateway::create($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $Gateway,
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
         // return $id;
    
         $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            
         ]);
    
        $Gateway = Gateway::find($id);
    
        if (!$Gateway) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gateway not found',
            ], 404);
        }
    
        $Gateway->update($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Gateway record updated successfully',
            'data' => $Gateway,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gateway $gateway)
    {
        // return "destroooy";
        $gateway->delete();
   return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $gateway,
        ]);
    }
    
    


}
