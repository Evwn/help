<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    function register()
    {
        return view('register');
    }
    function save(Request $req)
    {    $inputData = $req->all();
        $validateData=$req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'number'=>'required',
            'dob'=>'nullable',
            'gender'=>'nullable',
            'username'=>'required',
            'password'=>'required',
        ]);
        $user=new User();
        $user->firstname=$validateData['firstname'];
        $user->lastname=$validateData['lastname'];
        $user->email=$validateData['email'];
        $user->number=$validateData['number'];
        $user->dob=$validateData['dob'];
        $user->gender=$validateData['gender'];
        $user->username=$validateData['username'];
        $user->password=$validateData['password'];
        Log::info('before save method');
        $user->save();
        Log::info('After save method');
        return redirect()->route('login')->with('success', 'User created successfully.');
        Log::info('After route');
    }
}
