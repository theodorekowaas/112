<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Advisory;


class AboutController extends Controller
{
    

    public function submit(){
        return view ('submit');
    } 
    public function input(){
        return view ('input');
    }

    public function oneonetwo(){
      
        return view ('112');
    }
    

    public function store(Request $request){
        if ($request->isMethod('post')){
            $nama = $request -> input('nama');
            $alamat = $request -> input('alamat');
            $pekerjaan = $request -> input('pekerjaan');
            $data = array(
                'nama' => $nama,
                'alamat' =>$alamat,
                'pekerjaan' =>$pekerjaan,

            );
            DB::insert("INSERT INTO dbsiswa (nama, alamat, pekerjaan) VALUES (?, ?, ?)",  [$nama, $alamat, $pekerjaan]);
            //DB:: table('dbsiswa')->insert($nama, $alamat, $pekerjaan);
            return redirect('input/store');

        }else{
            return view('input');
        }

    }


   /* public function delete(Request $request){
        if ($request->isMethod('post')){
            $id = $request -> input('id');
            $description = $request -> input('description');
            $location = $request -> input('location');
            $data = array(
                'id' => $id,
                'description' => $description,
                'location' =>$location,

            );
            DB::delete("DELETE FROM advisories WHERE id = $id" );
            //DB:: table('dbsiswa')->insert($nama, $alamat, $pekerjaan);
            return redirect('dashboard/post');

        }else{
            return view('dashboard');
        }
    }*/


    public function save(Request $request){
        if ($request->isMethod('post')){
            $ID = $request -> input('ID');
            $Name = $request -> input('Name');
            $Address = $request -> input('Address');
            $Email = $request -> input('Email');
            $Phone = $request -> input('Phone');
            $data = array(
                'ID' => $ID,
                'Name' =>$Name,
                'Address' =>$Address,
                'Email' =>$Email,
                'Phone' =>$Phone,

            );
            DB::insert("INSERT INTO user (ID, Name, Address, Email, Phone) VALUES (?, ?, ?, ?, ?)",  [$ID, $Name, $Address, $Email, $Phone]);
            //DB:: table('dbsiswa')->insert($nama, $alamat, $pekerjaan);
            return redirect('submit/save');

        }else{
            return view('submit');
        }
    }



public function login(Request $request){
    if($request->isMethod('post')){
        $username = $request->input("username");
        $request->session()->put("username", $username);

        return redirect("/coba");
    } else{
        return view('formlogin');
    }
}

}

