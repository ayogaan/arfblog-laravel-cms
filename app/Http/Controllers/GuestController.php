<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class GuestController extends Controller
{
    public function __construct(){
        $this->data['categories']=Category::all();
    }
    public function index()
    {
        $this->data['articles']=Article::orderBy('created_at','asc')->paginate(2);        
        return view('client.home',$this->data);
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);
        $this->data['articles']= $article;
        $this->data['author'] = User::findOrFail($article->user_id);
        return view('client.article',$this->data);
    }
}
