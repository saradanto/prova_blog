<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index(){

        $articles = Article::all();
        return view('articles.index', compact('articles') );
    }

    public function create(){

        return view('articles.create');

    }

    public function store(ArticleRequest $request){

        $path_image= '';
        if ($request->hasFile('image')) {
            $original_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $original_name);
        };

        Article::create([
            'title' =>$request->title,
            'body'=>$request->body,
            'image'=> $path_image,
            'user_id'=> auth()->user()->id,
        ]);

        return redirect()->route('articles.index');
    }


}
