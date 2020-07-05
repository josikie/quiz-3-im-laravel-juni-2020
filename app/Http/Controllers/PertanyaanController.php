<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelPertanyaan;

class PertanyaanController extends Controller
{
    public function create(){
        return view('form');
    }

    public function store(Request $request){
        $pertanyaan_baru = ModelPertanyaan::save($request->all());
        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = ModelPertanyaan::get_all();
        //dd($pertanyaan);
        return view('index', compact('pertanyaan'));
    }
}
