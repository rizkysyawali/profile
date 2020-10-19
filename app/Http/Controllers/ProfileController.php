<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

use DB;

class ProfileController extends BaseController
{
    
    
    public function home() {
        return view ('welcome');
    }


    public function store(Request $request){

        $request->validate([
            'name'=> 'required|unique:message',
            'phone' =>'required',
            'email'=> 'required',
            'text' => 'required'
        ]);


        $query = DB::table('message')->insert([
            'name'=> $request['name'],
            'phone' => $request['phone'],
            'email'=> $request['email'],
            'text' => $request['text']
            ]);
        return redirect ('/');
        }

        public function admin() {
            $message = DB::table('message')->get();
            $i=1;
            return view ('layouts.admin', compact('message','i'));
            
        }
    
        public function destroy($id) {
            $query = DB::table('message')
            ->where('id', $id)
            ->delete();
            return redirect ('/pro-admin');
        } 

}
