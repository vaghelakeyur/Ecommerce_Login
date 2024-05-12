<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
   public function homepage(){

	   return view('admin.homepage');
   }

   public function logout_confirm(Request $request){

      $request->session()->flush();
      Auth::logout();
      return redirect('/');
   }

   public function login_view(){
        
      return view('home.login');
  }

  

  public function login_confirm(Request $request){

      $userCredential = $request->only('email', 'password');

      if (Auth::attempt($userCredential)) {
          
          if (Auth::user()->is_role == 1) {
              
              return redirect()->route('homepage');
          }
          else {
              
              return redirect()->route('userpage');
          }

      }
      else {

          return redirect()->back()->with('error','Your Credentials are Not Correct...hello keyur');

          // How to Push changes on Github...


      }
    

  }
}
