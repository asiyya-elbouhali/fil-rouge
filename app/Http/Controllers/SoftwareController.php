<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Inertia\Inertia;
use App\Models\Software;
use Illuminate\Http\Request;
use App\Models\BusinessCategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SoftwareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $softwares = Software::paginate(5);

        return $softwares;

    }
    public function AllSoftwares()
    {
        $softwares = Software::paginate(10);
// dd($softwares);
        // return $softwares;
        return Inertia::render('Softwares',[
            'softwares'=>$softwares]);

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

    public function MySoftware()
    {
        $userId=auth()->user()->id;
         $software=Software::where('user_id',$userId )->get();


         $LicenceController = new LicenceController();


         $AllMyLicences = $LicenceController->AllMyLicences();

        // dd($software);
        // return $software;
        return Inertia::render('DeveloperArea',
        [
        'MySoftware'=> $software,
        'MyLicences'=> $AllMyLicences



    ]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        return Inertia::render('Softwares/Create');
    }
    public function moveFile(Request $request)
    {
        $file = $request->file('file');

        // Generate a unique filename
        $filename = time() . '_' . $file->getClientOriginalName();

        // Move the file to the public directory
        $file->move(public_path('uploads'), $filename);

        return response()->json(['filename' => $filename]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $validatedData = $request->validate([
            'name' => 'required',
            'version' => 'required',
            // 'add_date' => 'required|date',
            'compatibility' => 'required',
            'developer' => 'required',
            'image' => 'required',
            'description' => 'required',
            'url' => 'required',
            'icon' => 'required',
        ]);
    
        $software = new Software($validatedData);
        $software->user_id = $request->user()->id;
        $software->save();
    
        return response()->json([
            'status' => 'success',
            'message' => 'Software record created successfully',
            'data' => $software,
        ]);
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $software=Software::find($id);
        $BusinessCategories = new BusinessCategoryController();

        // $AllBusinessCategories = $BusinessCategories->AllBusinessCategories();
         $AllBusinessCategories = DB::table('licences')
                                    ->join('business_categories','licences.business_categories_id','=','business_categories.id')
                                    ->join('software','licences.software_id','=','software.id')
                                    ->select('business_categories.*','licences.price')
                                    ->get();

// return ($AllBusinessCategories);
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
      return response()->json([
               'status' => 'success',
               'message' => 'Software record updated successfully',
               'data' => $software,
           ]);
    }
}
