<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visitor;
class visitorController extends Controller
{
    //
    public function insertData(Request $request)
    {
    	$visitor = new visitor;
    	$visitor->name = $request->input('name');
    	$visitor->email = $request->input('email');
    	$visitor->phone = $request->input('phone');
    	$visitor->message = $request->input('message');
    	$visitor->save();
    	return back();
    }
}
