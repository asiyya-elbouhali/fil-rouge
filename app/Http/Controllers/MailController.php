<?php

namespace App\Http\Controllers;

use App\Mail\AppMail;
use App\Models\Blocked;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
       /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $mailData = [
            'name' => 'le titre de notre message22 ',
            'email' => 'le titre de notre message22 ',
            'body' => ' The body yes 33',

        ];
    $emailResult=Mail::to('asiyyayoucode@gmail.com')->send(new AppMail($mailData));

   if($emailResult)     dd("Email is s//ent successfully.");

    }       /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendEmail(Request $request)
    {
        // dd(User::count());
        // dd(Blocked::count());
        // dd($request);
        $mailData = [
            'name' => $request->name,
            'email' =>  $request->email,
            'body' =>  $request->message,
        ];

       $emailFrom=$request->email;
    //    $emailFrom='asiyyayoucode@gmail.com';

    $emailResult=Mail::to($emailFrom)->send(new AppMail($mailData));

     if($emailResult)
     {
        $this->UpdateUserRole($request->email,'TBDeveloper');
       return redirect('BecomeDeveloper')->with('success','Email is sent successfully !');
     } else {
     return  redirect('BecomeDeveloper')->with('error','Whoops !');
     }
    //  dd("Email is sent successfully ");

    }

    /* this function will change the type of the current user to 'To become developer'
     * so it get the current user and update his type to 'To become developer'
     * @return response()
     */
public function UpdateUserRole($email,$toNewRole){
// dd(Blocked::count());

    User::where('email','=',$email)
    ->where('type','!=','Blocked')
    ->update(['type'=>$toNewRole]);

    }

public function unblockUserRole($email){

    User::where('email','=',$email)
    ->where('type','=','Blocked')
    ->update(['type'=>'user']);

    }


}
