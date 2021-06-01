<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Str;
use Session;

class ArticleController extends Controller
{
    public function index(){
        $this->data['articles']=Article::orderBy('tittle','asc')->paginate(5);
        return view('admin/article/index',$this->data);
    }

    public function create(){
        return view('admin/article/form');
    }

    public function store(ArticleRequest $request){
        $param = $request->except('_token');
        $param['user_id']=2;
        $param['img_url']=Str::slug($param['tittle']).'.jpg';
        if(Article::create($param)){
            Session::flash('success', 'Article has been created');
        }
        return redirect('admin/article');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        $this->data['articles']= $article;
        return view('admin/article/form',$this->data);

    }

    public function update(ArticleRequest $request,$id){
        $param = $request->except('_token');
        $article=Article::findOrFail($id);
        if($article->update($param)){
            Session::flash('success', 'Article has been updated');
        }
        return redirect('admin/article');
    }

    public function destroy($id){
        $article = Article::findOrFail($id);
        if($article->delete()){
            Session::flash('success', 'Article has been deleted');
        }
        return redirect('admin/article');

    }
}
