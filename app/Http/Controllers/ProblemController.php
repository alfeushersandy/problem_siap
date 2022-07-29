<?php

namespace App\Http\Controllers;

use App\Models\Siap;
use Illuminate\Http\Request;

class ProblemController extends Controller
{
    public function index(){
        return view('content.index');
    }

    public function create(Request $request){
        $this->validate($request, [
            'gambar' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'tanggal' => 'required',
            'kategori' => 'required'
        ]);

        //upload image
        $gambar = $request->file('gambar');
        $gambar->storeAs('public/SIAP', $gambar->hashName());

        $siap = Siap::create([
            'tanggal' => $request->tanggal,
            'gambar' => $gambar->hashName(),
            'narasi' => $request->narasi,
            'kategori' => $request->kategori
        ]);

       return response()->json($request);
    }
}
