<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Advisory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FormController extends Controller
{

    public function signup(){
        return view ('signup');
    }

    public function report(){
        return view ('report');
    }

    
    public function login(){
        return view('login');
    }
    


  public function oneonetwo(Request $request)
    {
        if ($request->isMethod('post')){
            $ID = $request -> input('ID');
            $Name = $request -> input('Name');
            $Address = $request -> input('Address');
            $Email = $request -> input('Email');
            $Phone = $request -> input('Phone');
            $password = $request -> input('password');
            $data = array(
                'ID' => $ID,
                'Name' =>$Name,
                'Address' =>$Address,
                'Email' =>$Email,
                'Phone' =>$Phone,
                'password' =>$password,
                
            );

             DB::insert("INSERT INTO user(ID, Name, Address, Email, Phone, password) VALUES (?, ?, ?, ?, ?,?)",  [$ID, $Name, $Address, $Email, $Phone,$password]);
            //DB:: table('user')->insert($ID, $Name, $Address, $Email, $Phone);
            return view('/112');

        }else{
            return view('signup');
        }
    }

    public function sent(Request $request)
    {
        if ($request->isMethod('post')){
            $description = $request->input('description');
            $location = $request->input('location');
            $categories = $request->input('categories');
            $data = array(
                'description' => $description,
                'location' => $location,
                'categories' => $categories,
            );
    
            DB::insert("INSERT INTO advisories (description, location, categories) VALUES (?, ?, ?)", [$description, $location, $categories]);
    
            return view('/112');
    
        } else {
            return view('signup');
        }
    }

    public function delete($id)
    {
        $advisory = \App\Advisory::find($id);
        $advisory->delete();
        return redirect('/dashboard/post')->with('success', 'Report has been deleted');
    }

    /*public function edit($id)
    {
        $advisory = \App\Advisory::find($id);
        return view('dashboard.posts.edit');
    }*/
    

}
/*    public function postlogin(Request $request)
    {
         if (Auth::guard('penggunas')->attempt(['email' => $request->email, 'password'=> $request->password])) {
            return redirect('/112');

         }return redirect('/');
        }
}

   /*    $request->validate([
            'ID' => 'required',
            'Name' => 'required',
            'Address' => 'required',
            'Email' => 'required',
            'Phone' => 'required'

        ],[
            'ID.required' => 'ID is required',
            'Name.required' => 'Name is required',
            'Address.required' => 'Adddress is required',
            'Email.required' => 'Email is required',
            'Phone.required' => 'Phone is required',

        ]
    );*/

  /*  $infologin = [
        'ID' => $request->ID,
        'Name' => $request->Name,
        'Address' => $request->Address,
        'Email' => $request->Email,
        'Phone' => $request->Phone,
    ];

    if (Auth::attempt($infologin)){
        return 'sukses';
    } else{
        return 'gagal';
    }*/