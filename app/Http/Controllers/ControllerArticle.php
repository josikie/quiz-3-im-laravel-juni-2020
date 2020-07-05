<?php

namespace App\Http\Controllers;
use App\Models\ModelArticle;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return 'article.create';
    }
    
    public function index(){
        $articles = ModelArticle::get_all();
        return view('index', compact('articles'));
    }
    public function edit($id){
        $article = ModelArticle::find_by_id($id);
        return view('article.edit', compact('article'));
    }

    public function show($id){
        $articlee = ModelArticle::find_by_id($id);

        return view('article.show', compact('$item'));
    }

    public function store(Request $request){
        $new_article = ModelArticle::save($request->all());
        return redirect('/items');
    }

    public function update($id, Request $request){
        $articleee = ModelArticle::update($id, $request->all());

        redirect('/items');
    }

    public function destroy($id){
        $deleted = ModelArticle::destroy($id);

        return redirect('/items');
    }
}
