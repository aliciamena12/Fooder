<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Hash;

class UsersController extends Controller
{
    
    public function index()
    {
        return view('users');
    }

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name'=>'required|min:3|max:25',
            'email'=>'required|min:3|email',
            'password1'=>'required|min:3|required_with:password2',
            'password2'=>'required|min:3'
        ]);

        if ($validator -> fails()){
            return back()
            ->withInput()
            ->with('Error', 'Fill all the fields')
            ->withErrors($validator);
        }else{
            $user = User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'img'=>null,
                'role'=>'particular'
            ]);
            return back()->with('listo', 'se ha insertado correctamente');
        } 
    }
}