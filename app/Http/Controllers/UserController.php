<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use App\Models\Order;
use App\Models\TBDeveloper;
use Illuminate\Http\Request;
use App\Http\Resources\AllSoftwareCollection;
use App\Http\Controllers\BusinessCategoryController;

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

        $softwareController = new SoftwareController();
        $BusinessCategoryController = new BusinessCategoryController();
        $ServerController = new ServerController();
        $KeyStatusController = new KeyStatusController();
        $OrderStatusController = new OrderStatusController();
        $KeyController = new KeyController();
        $OrderController = new OrderController();
        $LicenceController = new LicenceController();
        $GatewayController = new GatewayController();

        $AllSoftware = $softwareController->AllSoftware();
        $AllBusinessCategories = $BusinessCategoryController->AllBusinessCategories();
        $AllServers = $ServerController->AllServers();
        $AllKeyStatuses = $KeyStatusController->AllKeyStatuses();
        $AllOrderStatuses = $OrderStatusController->AllOrderStatuses();
        $AllKeys = $KeyController->AllKeys();
        $AllOrders = $OrderController->AllOrders();
        $AllLicences = $LicenceController->AllLicences();
        $AllGateways = $GatewayController->AllGateways();



        $tbdevelopers=TBDeveloper::where('type','=','TBDeveloper')->get();
     return Inertia::render('AdminArea',
        [

        'tbdevelopers'=> $tbdevelopers,
         'software' => $AllSoftware,
         'BusinessCategories' => $AllBusinessCategories,
         'Servers'=> $AllServers,
         'KeyStatuses'=> $AllKeyStatuses,
         'OrderStatuses'=> $AllOrderStatuses,
         'Keys'=> $AllKeys,
         'Orders'=> $AllOrders,
         'Licences'=> $AllLicences,
         'Gateways'=> $AllGateways,


    ]);

    }


    public function updateRole(Request $request,$id){

        
   $user= User::find($id);

    if($user->type !='Blocked') {
       User::where('id','=',$id)->update(['type'=> $request->type]);
    }

    return response()->json([
        'status' => 'success',
        'message' => 'Software record updated successfully',
        'data' => $user,
    ]);
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
