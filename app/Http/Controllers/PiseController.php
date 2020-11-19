<?php

namespace App\Http\Controllers;
use App\more;

use Illuminate\Http\Request;

class PiseController extends Controller
{
    public function CreateForm(){
    	return view('SubmitForm');
    }
    public function CreateFormSave(Request $request){
    	// dd($request);
    	$bapu= new more();
    	$bapu->email=$request->email;
    	$bapu->pwd=$request->pwd;
    	$bapu->save();

    	return redirect('readform');
    }

    public function Readform(){
       $bapu=more::all();
       return view('Readform', compact('bapu'));
    }

    public function Editform($pise_id){

    	$bapu=more::find($pise_id);
    	return view('Formedit2',compact('bapu'));
    }
}
