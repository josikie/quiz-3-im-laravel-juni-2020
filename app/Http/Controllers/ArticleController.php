<?php

namespace App\Http\Controllers;
use App\Models\ArtikelModel;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return 'article.create';
    }

    public function index(){
        $articles = ArtikelModel::get_all();
        return view('index', compact('articles'));
    }
    public function edit($id){
        $article = ArtikelModel::find_by_id($id);
        return view('article.edit', compact('article'));
    }

    public function show($id){
        $articlee = ArtikelModel::find_by_id($id);

        return view('article.show', compact('$item'));
    }

    public function store(Request $request){
        $new_article = ArtikelModel::save($request->all());
        return redirect('/items');
    }

    public function update($id, Request $request){
        $articleee = ArtikelModel::update($id, $request->all());

        redirect('/items');
    }

    public function destroy($id){
        $deleted = ArtikelModel::destroy($id);

        return redirect('/items');
    }
}
