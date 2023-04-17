<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }


   

    public function AllOrders()
    {
        $orders=Order::orderBy('id')->get();
        return $orders;
    }

    public function AllMyOrders()
    {
        $myOrders = Order::orderBy('created_at')
        ->where('user_id', Auth::id())
        ->get();

        return $myOrders;
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Order/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_date' => 'required',
            'automatically_renew' => 'required',
            'price' => 'required',
            'number_of_device' => 'required',
            'total_before_tax' => 'required',
            'total_after_tax' => 'required',
            'next_due_date' => 'required',
            'web_hosting' => 'required',
            'demon_version' => 'required',
            'business_categories_id' => 'required',
            'user_id' => 'required',
            'software_id' => 'required',
            'order_status_id' => 'required',
            'server_id' => 'required'
        ]);

        $order = Order::create($validatedData);

        return response()->json([
            'message' => 'Order created successfully',
            'data' => $order
        ], 201);
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
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('ClientArea');
    }
}
