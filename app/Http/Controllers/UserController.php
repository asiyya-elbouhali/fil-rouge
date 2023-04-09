<?php

namespace App\Http\Controllers;

use App\Http\Resources\AllSoftwareCollection;
use App\Models\Order;
use App\Models\TBDeveloper;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user=auth()->user()->id;
    $orders=Order::where('user_id',$user)->get();

    $ordersCollection=new AllSoftwareCollection($orders);
//  return $ordersCollection;
        return Inertia::render('ClientArea',
        ['orders'=>$ordersCollection]);

    }


    public function getAllTBDeveloper(){

        $tbdevelopers=TBDeveloper::where('type','=','TBDeveloper')->get();
     return Inertia::render('AdminArea',
        ['tbdevelopers'=>$tbdevelopers]);

    }


    public function updateRole($id){

   $user= User::find($id);

    if($user->type !='Blocked') {
       User::where('id','=',$id)->update(['type'=>'Developer']);
    }

     return Inertia::render('AdminArea');

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
        //
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
