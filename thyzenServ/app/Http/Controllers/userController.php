<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\clientUser;
use Hash;
use Session;

class userController extends Controller
{
    public function login()
    {
        return view("auth.clientLogin");
    }
    public function registration()
    {
        return view("auth.clientRegistration");
    }
    public function registerClient(Request $request)
    {
        $request-> validate([
            'First_Name'=>'required',
            'Last_Name'=>'required',
            'email'=>'required|email|unique:client_users',
            'password'=>'required|min:5',
            'city'=>'required',
            'country'=>'required',
            'Phone_Number'=>'required'
        ]);
        $user = new clientUser();
        $user->First_Name = $request->First_Name;
        $user->Last_Name = $request->Last_Name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->city = $request->city;
        $user->country = $request->country;
        $user->Phone_Number = $request->Phone_Number;
        $res = $user->save();
        if($res){
            return back()->with('success','Registered successfully');
        }
        else{
            return back()->with('fail','Something wrong');
        }

    }

    public function loginClient(Request $request)
    {
        $request-> validate([
            'email'=>'required',
            'password'=>'required|min:5'
        ]);
        $user = clientUser::where('email', '=', $request->email)->first();
        if ($user)
        {
            if(Hash::check($request->password,$user->password))
            {
                $request->session()->put('loginId', $user->id);
                return redirect('homepage');
            }
            else{
                return back()->with('fail', 'The password does not match');
            }
        }
        else{
            return back()->with('fail','The email is not registered.');
        }
    }
    public function homepage()
    {
        return view("auth.homepage");
    }
}
