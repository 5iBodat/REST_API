<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\PackageController;

class Testing extends Controller
{
    public function Index()
    {
    	return view("index");
    }

    public function Doc()
    {
    	return view("doc");
    }

    public function SearchId()
    {
    	
    	return view('InsertId');
    }

    public function getId(Request $request)
    {
    	$id = $request;
    	return $id;
    }

    public function post(){
    	return view('post');
    }
    
}
