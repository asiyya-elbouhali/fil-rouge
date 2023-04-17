<?php

namespace App\Http\Controllers;

use App\Models\BusinessCategory;
use Inertia\Inertia;
use App\Models\Software;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $software=Software::orderBy('id')->get();

        return Inertia::render('Softwares',
        ['softwares'=>$software]);

    }

    public function getOrderData(){

        $BusinessCategories = new BusinessCategoryController();

      $AllBusinessCategories = $BusinessCategories->AllBusinessCategories();
      return Inertia::render('SoftwareDetails',
        [
        'AllBusinessCategories'=> $AllBusinessCategories,



    ]);

    }


    public function AllSoftware()
    {
        $software=Software::orderBy('id')->get();

        return $software;
    }

    public function AllDeveloperSoftware()
    {
        $userType=auth()->user();
        $software=Software::where($userType->type,'Developer')->get();        
 
        dd($software);
        return $software;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Softwares/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  $validatedData = $request->validate([
        'name' => 'required',
        'version' => 'required',
        // 'add_date' => 'required|date',
        'compatibility' => 'required',
        'developer' => 'required',
        // 'image' => 'required',
        'description' => 'required',
        // 'url' => 'required',
        // 'icon' => 'required',
    ]);

    $software = Software::create($validatedData);

    return response()->json([
        'status' => 'success',
        'message' => 'Software record created successfully',
        'data' => $software,
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
        $software=Software::find($id);
        $BusinessCategories = new BusinessCategoryController();

        $AllBusinessCategories = $BusinessCategories->AllBusinessCategories();

        return Inertia::render('SoftwareDetails',
        ['details'=>$software,
        'AllBusinessCategories'=> $AllBusinessCategories,


        ]
    );

    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Software $software)
    // {
    //     // return "---".$software;
    //     return Inertia::render('Softwares/Edit', [
    //         'softwares' =>$software,
    //     ]);
    // }

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, string $id)
 {
    //  return $request->name;

    $validatedData = $request->validate([
        'name' => 'required',
        'version' => 'required',
        // 'add_date' => 'required|date',
        'compatibility' => 'required',
        'developer' => 'required',
        // 'image' => 'required',
        'description' => 'required',
        // 'url' => 'required',
        // 'icon' => 'required',
    ]);

    $software = Software::find($id);

    if (!$software) {
        return response()->json([
            'status' => 'error',
            'message' => 'Software not found',
        ], 404);
    }

    $software->update($validatedData);

    return response()->json([
        'status' => 'success',
        'message' => 'Software record updated successfully',
        'data' => $software,
    ]);
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Software $software)
    {
        // return "destroooy";
        $software->delete();

        return redirect()->route('softwares.index');
    }
}
