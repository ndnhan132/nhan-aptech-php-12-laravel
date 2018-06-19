<?php

namespace App\Http\Controllers;

use App\Article;
use DemeterChain\A;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles =  Article::all();
        return view('article.home', ['articles'=> $articles]);
    }
    public function add(){
        return view('article.add');
    }
    public function store( Request $request){
        $art = new Article();
        $art->saveArticle($request);
        return redirect()->route('home');
    }
    public function deleteArticle($id){
        $art= new Article();
        $art->deleteArticle($id);
        return redirect()->route('home');
    }
    public function editArticle($id){
        $art=Article::find($id);
        return view('article.edit', ['article'=>$art]);
    }
    public function updateArticle($id , Request $request){
        $art= new Article();
        $art->updateArticle($id, $request);
        return redirect()->route('home');
    }
    public function showArticle($id){
        $art=Article::find($id);
        return view('article.show', ['article'=>$art]);
    }
}
