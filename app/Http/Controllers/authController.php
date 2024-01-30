<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller 
{
    public function register(){
        return view('auth/register');
    }
public function registerPost(Request $request)
{


    $user = new User();
    
    $user->First_Name = $request->First_Name;
    $user->Last_Name = $request->Last_Name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    
    $user->save();
    return back()->with('succes','Register successfully');

}
public function signin(){
    return view('auth/');
}
}
