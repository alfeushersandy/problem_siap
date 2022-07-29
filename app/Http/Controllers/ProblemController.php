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
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'tanggal' => 'required',
            'kategori' => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/SIAP', $image->hashName());

        $siap = Siap::create([
            'tanggal' => $request->tanggal,
            'gambar' => $image->hashName(),
            'narasi' => $request->narasi,
            'kategori' => $request->kategori
        ]);

       return response()->json($siap);
    }
}
