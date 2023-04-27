<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\BecomeDeveloper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Notification;

class NotificationController extends Controller
{
    public static function ToBecomeDeveloper(string $data) {
        $user = User::where('id',11)->get();
        $userSchema = $user;
  
        $Data = [
            'name' => Auth::user()->name,
            'body' => 'This client wants to be a developer he said : ',$data,
 
        ];
  
        Notification::send($userSchema, new BecomeDeveloper($Data));
    }}
