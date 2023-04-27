<?php

namespace App\Http\Controllers;

use App\Models\Server;
use Illuminate\Http\Request;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = Server::paginate(3);

        return $users;

    }


    public function AllServers()
    {
        $servers=Server::orderBy('id')->get();

        return $servers;
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
            'adresse' => 'required',
            'port' => 'required',
            'default_database' => 'required',
            'login' => 'required',
            'password' => 'required',

        ]);

        $server = Server::create($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Server record created successfully',
            'data' => $server,
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
            'adresse' => 'required',
            'default_database' => 'required',
            'port' => 'required',
            'password' => 'required',
            'login' => 'required',
         ]);

        $server = Server::find($id);

        if (!$server) {
            return response()->json([
                'status' => 'error',
                'message' => 'Software not found',
            ], 404);
        }

        $server->update($validatedData);

        return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $server,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Server $server)
    {
        // return "destroooy";
        $server->delete();
   return response()->json([
            'status' => 'success',
            'message' => 'Software record updated successfully',
            'data' => $server,
        ]);
        return redirect()->route('AdminArea');
    }
}
