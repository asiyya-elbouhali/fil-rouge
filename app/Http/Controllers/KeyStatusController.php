<?php

namespace App\Http\Controllers;

use App\Models\KeyStatus;
use Illuminate\Http\Request;

class KeyStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function AllKeyStatuses()
    {
        $keyStatuses=KeyStatus::orderBy('id')->get();

        return $keyStatuses;
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
            'value' => 'required',
           
        ]);
    
        $KeyStatus = KeyStatus::create($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $KeyStatus,
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
            'value' => 'required',
            
         ]);
    
        $KeyStatus = KeyStatus::find($id);
    
        if (!$KeyStatus) {
            return response()->json([
                'status' => 'error',
                'message' => 'Software not found',
            ], 404);
        }
    
        $KeyStatus->update($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $KeyStatus,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeyStatus $KeyStatus)
    {
        // return "destroooy";
        $KeyStatus->delete();

        return redirect()->route('AdminArea');
    }
}
