<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    //
    function Get()
    {
    	$data = Package::all();
    	return response()->json([
		"message"=>"Success",
		"data"=>$data
		]);
    }

    function GetById($id)
    {
    	$package = Package::where('transaction_id',$id)->first();
        if ($package) {
            return response()->json([
            "message"=>"Success",
            "data"=> $package
            ]);
        }
    	return response()->json([
		"message"=>"Transaction Id ".$id. " Not Found"
		]);
    }

    function Post(Request $request)
    {
    	$package = new Package;
    	$package->transaction_id = $request->transaction_id;
    	$package->customer_name = $request->customer_name;
    	$package->customer_code = $request->customer_code;
    	$package->transaction_amount = $request->transaction_amount;
    	$package->transaction_discount = $request->transaction_discount;
    	$package->transaction_additional_field = $request->transaction_additional_field;
    	$package->transaction_payment_type = $request->transaction_payment_type;
    	$package->transaction_state = $request->transaction_state;
    	$package->transaction_code = $request->transaction_code;
    	$package->transaction_order = $request->transaction_order;
    	$package->location_id = $request->location_id;
    	$package->organization_id = $request->organization_id;
    	$package->transaction_payment_type_name = $request->transaction_payment_type_name;
    	$package->transaction_cash_amount = $request->transaction_cash_amount;
    	$package->transaction_cash_change = $request->transaction_cash_change;

    	$package->save();

    	return response()->json([
		"message"=>"Success",
		"data"=> $package 
		]);
    }

    function Put($id, Request $request)
    {
    	$package = Package::where("transaction_id", $id)->first();
    	if ($package) {
    		$package->transaction_id = $request->transaction_id ? $request->transaction_id : $package->transaction_id;
	    	$package->customer_name = $request->customer_name ? $request->customer_name : $package->customer_name;
	    	$package->customer_code = $request->customer_code ? $request->customer_code : $package->customer_code;
	    	$package->transaction_amount = $request->transaction_amount ? $request->transaction_amount : $package->transaction_amount;
	    	$package->transaction_discount = $request->transaction_discount ? $request->transaction_discount : $package->transaction_discount;
	    	$package->transaction_additional_field = $request->transaction_additional_field ? $request->transaction_additional_field : $package->transaction_additional_field;
	    	$package->transaction_payment_type = $request->transaction_payment_type ? $request->transaction_payment_type : $package->transaction_payment_type;
	    	$package->transaction_state = $request->transaction_state ? $request->transaction_state : $package->transaction_state;
	    	$package->transaction_code = $request->transaction_code ? $request->transaction_code : $package->transaction_code;
	    	$package->transaction_order = $request->transaction_order ? $request->transaction_order : $package->transaction_order;
	    	$package->location_id = $request->location_id ? $request->location_id : $package->location_id;
	    	$package->organization_id = $request->organization_id ? $request->organization_id : $package->organization_id;
	    	$package->transaction_payment_type_name = $request->transaction_payment_type_name ? $request->transaction_payment_type_name : $package->transaction_payment_type_name;
	    	$package->transaction_cash_amount = $request->transaction_cash_amount ? $request->transaction_cash_amount : $package->transaction_cash_amount;
	    	$package->transaction_cash_change = $request->transaction_cash_change ? $request->transaction_cash_change : $package->transaction_cash_change;

	    	$package->save();
	    	return response()->json([
			"message"=>"Success",
			"data"=> $package
			]);
    	}
		return response()->json([
			"messege"=>"PUT Method Fail",
			"data"=>"Not Found Transaction Id " .$id
		], 400);
    	
    }

    function Patch($id, Request $request)
    {
        $package = Package::where("transaction_id", $id)->first();
        if ($package) {
            $package->transaction_id = $request->transaction_id ? $request->transaction_id : $package->transaction_id;
            $package->customer_name = $request->customer_name ? $request->customer_name : $package->customer_name;
            $package->customer_code = $request->customer_code ? $request->customer_code : $package->customer_code;
            $package->transaction_amount = $request->transaction_amount ? $request->transaction_amount : $package->transaction_amount;
            $package->transaction_discount = $request->transaction_discount ? $request->transaction_discount : $package->transaction_discount;
            $package->transaction_additional_field = $request->transaction_additional_field ? $request->transaction_additional_field : $package->transaction_additional_field;
            $package->transaction_payment_type = $request->transaction_payment_type ? $request->transaction_payment_type : $package->transaction_payment_type;
            $package->transaction_state = $request->transaction_state ? $request->transaction_state : $package->transaction_state;
            $package->transaction_code = $request->transaction_code ? $request->transaction_code : $package->transaction_code;
            $package->transaction_order = $request->transaction_order ? $request->transaction_order : $package->transaction_order;
            $package->location_id = $request->location_id ? $request->location_id : $package->location_id;
            $package->organization_id = $request->organization_id ? $request->organization_id : $package->organization_id;
            $package->transaction_payment_type_name = $request->transaction_payment_type_name ? $request->transaction_payment_type_name : $package->transaction_payment_type_name;
            $package->transaction_cash_amount = $request->transaction_cash_amount ? $request->transaction_cash_amount : $package->transaction_cash_amount;
            $package->transaction_cash_change = $request->transaction_cash_change ? $request->transaction_cash_change : $package->transaction_cash_change;

            $package->save();
        	return response()->json([
    		"message"=>"PETCH Method Success",
            "data"=> $package
    		]);
        }
        return response()->json([
        "message"=>"Transaction Id " .$package." Not Found"
        ]);
    }

    function Delete($id)
    {
    	$package = Package::where("transaction_id", $id)->first();
    	if ($package) {
    		$package->delete();
	    	return response()->json([
			"message"=>"Delete Transaction Id " .$id. " Success"
			]);
    	}
    	return response()->json([
			"message"=>"Transaction Id " .$id. "Not Found"
			]);
    }



}
