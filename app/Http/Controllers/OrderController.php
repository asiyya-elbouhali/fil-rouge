<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Licence;
use App\Models\Order;
use App\Models\Software;
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
        $orders = Order::paginate(3);

        return $orders;
    }


   

    public function AllOrders()
    {
        $orders = Order::with('user', 'software', 'orderStatus','server', 'businessCategory','key')->orderBy('id')->get();
        //    dd($orders);
        return $orders;
    }



    public function AllMyOrders()
    {
        $myOrders = Order::with('software', 'orderStatus')->orderBy('created_at')
        ->where('user_id', Auth::id())
        ->get();
        $mySoftware = Software::orderBy('created_at')
        ->where('user_id', Auth::id())
        ->get();
        $myInvoiceIds = $myOrders->pluck('id')->toArray();
    
        $myInvoices = Invoice::whereIn('order_id', $myInvoiceIds)
                              ->orderBy('created_at')
                              ->get();
     

        return Inertia::render('ClientArea',[
            'myOrders'=>$myOrders,
            'myInvoices'=>$myInvoices,
            'mySoftware'=>$mySoftware
        ]);
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
        // return("stoooore".$request);
        // return ($request);
        $validatedData = $request->validate([
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
