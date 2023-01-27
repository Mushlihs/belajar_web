<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Auth extends Controller
{
    public function CekAuth(Request $req){
        $data=DB::table('user')->get()->toArray();
        $u=$req->input('username');
        $p=$req->input('password');
        foreach($data as $i){
            $du=$i->USERNAME;
            $dp=$i->PASSWORD;
            if ($u == $du && $p == $dp){
                session(['user' => $u]);
                return redirect("");

            }
        }
        session(['sukses' => ""]);
        echo "Login gagal"; 
        
    }
    public function logout(){
        session()->flush();
        return redirect("/");
    }
}
