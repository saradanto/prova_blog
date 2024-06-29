<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ArticleUpdateRequest;
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

        $article = Article::create([
            'title' =>$request->title,
            'body'=>$request->body,
            'image'=> $path_image,
            'user_id'=> auth()->user()->id,
        ]);

        return redirect()->route('articles.index');
    }

    public function edit(Article $article){

        return view('articles.edit', compact('article'));
    }

    public function update(ArticleUpdateRequest $request, Article $article ){



        $path_image= $article->image;
        if ($request->hasFile('image')) {
            $original_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $original_name);
        };

        $article->update([
            'title' =>$request->title,
            'body'=>$request->body,
            'image'=> $path_image,

        ]);

        return redirect()->route('articles.index');


    }

    protected function authorizeArticleOwner(Article $article)
    {
        if (auth()->id() !== $article->user_id) {
            abort(403, 'Non sei autorizzato a eliminare questo articolo.');
        }
    }


    public function destroy(Article $article){
        $this->authorizeArticleOwner($article);

        $article->delete();


        session()->flash('success', 'Articolo cancellato con successo');
        return redirect()->route('articles.index');
    }



}
