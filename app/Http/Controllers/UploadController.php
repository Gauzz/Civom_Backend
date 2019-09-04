<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Asset;
use validator;

class UploadController extends Controller
{

    public function index(){

     $assets = Asset::all();
     return view('home')->with('assets',$assets);
    }
   
   public function show($id){
       $assets = Asset::find($id);
       return view('home')->with('assets',$assets);
   }
    
        public function upload (Request $request) {
           
            $request->input('name');
             $daepath='';
             $fbxpath='';
             $thumbnailpath = '';
            
            $files=$request->file('dae');
            $fileName = null;
            if ($request->hasFile('dae')) {
                $allowedfileExtension=['dae'];

                $daepath = $files->getClientOriginalName().".".$files->getClientOriginalExtension();
                $files->move(public_path('assets/'.time()), $daepath);
                
            }
            
            
            $files=$request->file('fbx');
            
            $fileName = null;
            if ($request->hasFile('fbx')) {
                $fbxpath = $files->getClientOriginalName().".".$files->getClientOriginalExtension();
                 $files->move(public_path('assets/'.time()), $fbxpath);
            }


//             //  $files=$request->file('texture');
            
//             //  $fileName = null;
//              if ($request->hasFile('texture')) {
//                 $allowedfileExtension=['pdf','jpg','png','docx'];
// $files = $request->file('texture');
// foreach($files as $file){
//     $texturepath = $files->getClientOriginalName().".".$files->getClientOriginalExtension();
//              $files->move(public_path('assets/'.time()), $texturepath);

// $check=in_array($extension,$allowedfileExtension);


// }
//              }



            //     $texturepath = $files->getClientOriginalName().".".$files->getClientOriginalExtension();
            //     $files->move(public_path('assets/'.time()), $texturepath);
   
            //  }
        
           // if($request->hasFile('texture'))


            $files=$request->file('thumbnail');

            $fileName = null;
             if ($request->hasFile('thumbnail')) {
                $thumbnailpath = $files->getClientOriginalName().".".$files->getClientOriginalExtension();
                $files->move(public_path('assets/'.time()), $thumbnailpath);
            }

            $assets=new Asset;
            $assets->name=$request->pname;
            $assets->description=$request->description;
            $assets->dae=(public_path('assets/'.time()).$daepath);
            $assets->fbx=(public_path('assets/'.time()).$fbxpath);
           // $assets->texture=(public_path('assets/'.time()).$texturepath);
            $assets->thumbnail=(public_path('assets/'.time()).$thumbnailpath);
            $assets->save();



            //return redirect()->route('layout.index')->with('success','Data Added');
    
            return  'name is '.$request;
            
         } 

        //  function getData(){
        //    $data['data']=DB::table('assets')->get();
        //    if(count($data)>0)
        //    {
        //        return view('home',$data);
        //    }
        //    else{
        //        return view('home');
        //    }
        // }

    }
          

