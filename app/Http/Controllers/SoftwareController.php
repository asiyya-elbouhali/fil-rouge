<?php

namespace App\Http\Controllers;

use App\Models\Software;
use Illuminate\Http\Request;
use Inertia\Inertia;

class SoftwareController extends Controller
{

    public function index()
    {

        $softwares = Software::all();
        // dd($softwares);
         
        return Inertia::render('/', [
            'allSoftwares' => '88'
        ]);
        // return redirect()->route('/home',['allSoftware'=> $softwares]);


    }











}
