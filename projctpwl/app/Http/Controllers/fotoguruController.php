<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\fotoguru;


class fotoguruController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function fotoguru(){
        $fotogurus = fotoguru::all();
        return view('fotoguru', ['fotoguru' => $fotogurus]);
    }
    
    public function addfotoguru(){
        return view('addfotoguru');
    }
    
    public function createfotoguru(Request $request){
        $addfotoguru = new fotoguru();
            $addfotoguru->id= $request->id;
            $addfotoguru->nama=$request->nama;
            $addfotoguru->fotourl= $request->file('fotourl')->store('img', 'public');
            
            $addfotoguru->save();
        return redirect('/fotoguru');

        // if($request->file('fotourl')){
        //     $addfotourl = $request->file('fotourl')->store('img', 'public');
        //  }
      
        //  fotoguru::create([
        //     'id'=> $request->id,
        //     'nama' => $request->nama,
        //     'fotourl' => $request->$addfotourl,
        //  ]);
        //  return redirect('/fotoguru');
      
    }

    public function editfotoguru($id){
        $fotoguru = fotoguru::find($id);
        return view('editfotoguru', ['fotoguru'=>$fotoguru]);
 }

    public function updatefotoguru($id, Request $request){
        // $fotoguru = fotoguru::find($id);
        // $fotoguru->id=$request->id;
        // $fotoguru->nama=$request->nama;
        // $fotoguru->fotourl=$request->fotourl;
        // $fotoguru->save();
        // return redirect('/fotoguru');
        
        $fotoguru = fotoguru::find($id);

        $fotoguru->id=$request->id;
        $fotoguru->nama=$request->nama;
             
        if($fotoguru->fotourl && 
        file_exists(storage_path('app/public/' . $fotoguru->fotourl)))
            {
            \Storage::delete('public/'.$fotoguru->fotourl);
        }
        $fotourl = $request->file('fotourl')->store('img', 'public');
        $fotoguru->fotourl=$fotourl;
     
        $fotoguru->save();
        return redirect('/fotoguru');
     
    }

    public function delete($id){
        $fotoguru = fotoguru::find($id);
        $fotoguru->delete();
        return redirect('/fotoguru');
    }
}

