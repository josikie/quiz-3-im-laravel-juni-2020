<?php

namespace App\Http\Controllers;
use App\Models\ArticleModel;
use Illuminate\Http\Request;

class ControllerArticle extends Controller
{
    public function create(){
        return 'article.create';
    }
    
    public function index(){
        $articles = ArticleModel::get_all();
        return view('index', compact('articles'));
    }
    public function edit($id){
        $article = ArticleModel::find_by_id($id);
        return view('article.edit', compact('article'));
    }

    public function show($id){
        $articlee = ArticleModel::find_by_id($id);

        return view('article.show', compact('$item'));
    }

    public function store(Request $request){
        $new_article = ArticleModel::save($request->all());
        return redirect('/items');
    }

    public function update($id, Request $request){
        $articleee = ArticleModel::update($id, $request->all());

        redirect('/items');
    }

    public function destroy($id){
        $deleted = ArticleModel::destroy($id);

        return redirect('/items');
    }
}
