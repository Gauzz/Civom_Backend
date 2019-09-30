<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lead;

class LeadController extends Controller
{
    public function index()
    {

     $leads = Lead::all();
     return view('analytics')->with('leads',$leads);
    }

    public function create(Request $request)
    {
        $leads = new Lead();

        $leads->assets = $request->input('assets');
        $leads->email = $request->input('email');
        $leads->mobile_no = $request->input('mobile_no');
    
        $leads->save();
        return response()->json();
    }
}
