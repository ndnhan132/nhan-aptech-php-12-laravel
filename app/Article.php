<?php

namespace App;

use http\Env\Request;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    public  function saveArticle( $request){
        $this->title= $request->title;
        $this->content= $request->content;
        $this->save();
    }
    public  function deleteArticle($id)
    {
        $this::destroy($id);
    }
    public function updateArticle($id, $request)
    {
        $art= Article::find($id);
        $art->title = $request->title;
        $art->content= $request->content;
        $art->save();
    }
}
