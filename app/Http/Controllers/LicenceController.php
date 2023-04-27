<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use App\Models\Licence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licences = Licence::with('software','businessCategory')->paginate(3);

        return $licences;
    }
    public function BusinessCategories(string $idSoftware)
    {
        $businessCategories=BusinessCategory::orderBy('id')->get();

        return $businessCategories;
    }


    public function AllLicences()
    {
        $licences=Licence::orderBy('id')->get();
        return $licences;
    }


    public function AllMyLicences()
    {
        $userId=auth()->user()->id;
        $licences = DB::table('orders')
            ->join('invoices', 'orders.id', '=', 'invoices.order_id')
            ->join('licences', 'licences.id', '=', 'orders.licence_id')
            ->where('orders.user_id', '=', $userId)
            ->select('licences.*')
            ->get();
        return $licences;
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
        // return $request;
        $validatedData = $request->validate([
            'price' => 'required',
            'description' => 'required',
            'software_id' => 'required',
            'business_categories_id' => 'required',

        ]);

        $Licence = Licence::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $Licence,
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
            'price' => 'required',
            'description' => 'required',
            'software_id' => 'required',
            'business_categories_id' => 'required',
         ]);

        $Licence = Licence::find($id);

        if (!$Licence) {
            return response()->json([
                'status' => 'error',
                'message' => 'Software not found',
            ], 404);
        }

        $Licence->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $Licence,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Licence $licence)
    {
             // return "destroooy";
      $licence->delete();
      return response()->json([
               'status' => 'success',
               'message' => 'Software record updated successfully',
               'data' => $licence,
           ]);
    }
}
