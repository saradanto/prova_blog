<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendEmail;
use App\Mail\SendLetter;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function welcome(){

        $articles = Article::all();

        return view('welcome', compact('articles'));

    }

    public function profile($id){
        return view('profile', ['id' => $id]);
    }

    public function form(){
        return view('pages.form');
        redirect()->route('pages.form');

    }

    public function send(SendEmail $request){
        $data= [
            "name" => $request->input('name'),
            "email" => $request->input('email'),
        ];

        Mail::to('tuoindirizzo@example.com')->send(new SendLetter($data));
    }
}
