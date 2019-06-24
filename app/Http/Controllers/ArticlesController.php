<?php

namespace App\Http\Controllers;

use App\Articles;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    //

    public function index(){
        //$articles = Articles::all();
        $articles = Articles::latest()->get();
        //return $articles;
        return view('articles.index',compact('articles'));
    }

    public function create(){
        return view('articles.create');
    }

    public function show($id){
        $article = Articles::find($id);
        //return $article;
        if(is_null($article)){
            abort('404');
        }
        return view('articles.show',compact('article'));
    }

    public  function store(Requests\CreateArticlesRequest $request){
    //public  function store(Request $request){

       // dd($request->get("title"));
       // return $request->all();
        $input = $request->all();
        $input["created_at"]=Carbon::now();
        $input["updated_at"]=Carbon::now();
        Articles::create($input);
        return redirect('articles');
    }

    public function edit($id){
        $article = Articles::find($id);
        //return $article;
        if(is_null($article)){
            abort('404');
        }
        return view('articles.edit',compact('article'));
    }

    public  function update(Requests\CreateArticlesRequest $request,$id){
        //public  function store(Request $request){
        $article = Articles::find($id);
        if(is_null($article)){
            abort('404');
        }
        $article->update($request->all());
        return redirect('articles');
    }
}
