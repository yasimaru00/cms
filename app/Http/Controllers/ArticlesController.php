<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
 
class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index',['articles' => $articles]);
    }

    public function store(Request $request)
    {
        if($request->file('image')){
            $image_name = $request->file('image')->store('image','public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
        ]);
        return redirect()->route('articles.index')->with('success','Artikel Berhasil Ditambahkan');
    }

    public function create(Request $request)
    {
        return view('articles.create');
    }
}
