<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\PDF;

class ArticlesController extends Controller
{
    public function index()
    {
        $article = Article::all();
        return view('articles.index',['article' => $article]);
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

    public function update(Request $request,$id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        
        if($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image))){
            Storage::delete('public/' .$article->featured_image);
        }

        $image_name = $request->file('image')->store('images','public');
        $article->featured_image = $image_name;
        $article->save();

        return redirect()->route('articles.index')->with('success','Artikel Berhasil Diupdate');
    }

    public function edit($id)
    {
        $article = Article::find($id);
        // dd($article);

        return view('articles.edit',['article' =>$article]);
    }

    public function cetak_pdf()
    {
        $articles = Article::all();
        $pdf = PDF::loadview('articles.articles_pdf',['articles' =>$articles]);
        return $pdf->stream();
    }

}

