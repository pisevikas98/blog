<?php

namespace App\Http\Controllers;
use App\rahul;

use Illuminate\Http\Request;

class VikasController extends Controller
{
    public function CreateVikas(){
    	return view('VikasForm');
    }

    public function CreateVikasSave(Request $request){
    	$pise=new rahul();
    	$pise->email=$request->email;
    	$pise->pwd=$request->pwd;
    	$pise->save();
    	

    	return redirect('readVikas');
    }

    public function ReadVikas(){
    	$viki=rahul::all();
    	return view('vikasData',compact('viki'));
    }
    public function edit_data($vikas_id){
         // dd($vikas_id);


         $data=rahul::find($vikas_id);
         // dd($data);
    	return view('editform',compact('data'));

    }

    public function formupdate(Request $request,$vikas_id){
    	// dd($vikas_id);
    	$data=rahul::find($vikas_id);
    	$data->email=$request->email;
    	$data->pwd=$request->pwd;
    	$data->save();

    	return redirect('/readVikas');

    }
}

