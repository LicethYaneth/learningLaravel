<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show ($id){
        return 'UserId'. $id;
    }

    public function saluda(){
        //return view('users',['name'=>'Liz']);
        return view('users')-> with('name','Max');
    }
}
