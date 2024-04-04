<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function register_view(){
        return view('home.register');
    }

    public function register_confirm(Request $request){

        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->password = Hash::make($request->password);

            $image = $request->image;

            $imagename = time().'.'. $image->getClientOriginalExtension();

            $request->image->move('Profile',$imagename);

            $user->image=$imagename;


        $user->save();

        return redirect()->back();
    }

    public function userpage(){

        return view('home.userpage');
    }

   

}
