<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\guru;


class guruController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function guru(){
        $gurus = guru::all();
        return view('guru', ['guru' => $gurus]);
    }
    
    public function addguru(){
        return view('addguru');
    }
    
    public function createguru(Request $request){
        $addguru = new guru();
            $addguru->id= $request->id;
            $addguru->nama=$request->nama;
            $addguru->ttl= $request->ttl;
            $addguru->alamat=$request->alamat;
            $addguru->jabatan=$request->jabatan;
            $addguru->kelas= $request->kelas;
            $addguru->save();
        return redirect('/guru');
    }

    public function editguru($id){
        $guru = guru::find($id);
        return view('editguru', ['guru'=>$guru]);
 }

    public function updateguru($id, Request $request){
        $guru = guru::find($id);
        $guru->id=$request->id;
        $guru->nama=$request->nama;
        $guru->ttl=$request->ttl;
        $guru->alamat=$request->alamat;
        $guru->jabatan=$request->jabatan;
        $guru->kelas= $request->kelas;
        $guru->save();
        return redirect('/guru');
    }

    public function delete($id){
        $guru = guru::find($id);
        $guru->delete();
        return redirect('/guru');
    }
}

