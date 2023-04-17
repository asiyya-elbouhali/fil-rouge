<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use Illuminate\Http\Request;

class BusinessCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    public function AllBusinessCategories()
    {
        $businessCategories=BusinessCategory::orderBy('id')->get();

        return $businessCategories;
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
        'number_of_devices' => 'required',
        'description' => 'required',
    ]);

    $BusinessCategory = BusinessCategory::create($validatedData);

    return response()->json([
        'status' => 'success',
        'message' => 'Software record created successfully',
        'data' => $BusinessCategory,
    ]);

//  $software=Software::orderBy('id')->get();
//     return Inertia::render('Softwares',
//         ['softwares'=>$software]);
        // return redirect()->route('AdminArea');
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
            'number_of_devices' => 'required',
            'description' => 'required',
         ]);
    
        $BusinessCategory = BusinessCategory::find($id);
    
        if (!$BusinessCategory) {
            return response()->json([
                'status' => 'error',
                'message' => 'Software not found',
            ], 404);
        }
    
        $BusinessCategory->update($validatedData);
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $BusinessCategory,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BusinessCategory $BusinessCategory)
    {
        $BusinessCategory->delete();

        return redirect()->route('softwares.index');
        }

        
}
