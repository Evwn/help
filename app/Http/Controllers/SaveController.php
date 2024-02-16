<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Illuminate\Http\Request;

class SaveController extends Controller
{
    function save(Request $reg)
    {
        $ValidateData=$req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required',
            'number'=>'required',
            'dob'=>'required',
            'gender'=>'required',
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
        $user->save();
        redirect()->route('login')->with('success','User created successfully.');
    }
}
