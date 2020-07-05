<?php

namespace App\Http\Controllers;
use App\Models\ModelJawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{

    public function create(){
        return view('jawaban');
    }
    public function index(){
     $jawaban = ModelJawaban::get_all();
     return view('listjawaban', compact('jawaban'));

    }

    public function store($id_pertanyaan, Request $request){
        $pertanyaan_baru = ModelJawaban::save($request->all());
        return redirect('/jawaban/{{$id_pertanyaan}}');
    }
}
