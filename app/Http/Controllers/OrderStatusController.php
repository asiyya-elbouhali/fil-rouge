<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


    public function AllOrderStatuses()
    {
        $orderStatuses=OrderStatus::orderBy('id')->get();

        return $orderStatuses;
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
    
        $orderStatus = OrderStatus::create($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $orderStatus,
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
    
        $OrderStatus = OrderStatus::find($id);
    
        if (!$OrderStatus) {
            return response()->json([
                'status' => 'error',
                'message' => 'Software not found',
            ], 404);
        }
    
        $OrderStatus->update($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $OrderStatus,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderStatus $OrderStatus)
    {
         // return "destroooy";
         $OrderStatus->delete();

         return redirect()->route('AdminArea');
    }
}
