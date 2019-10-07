<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Intervention\Image\Facades\Image;
use File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::get();

        return view('pages.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'             =>  'required|min:4|max:50',
            'body'              =>  'required|min:4',
            'featured_image'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048|dimensions:min_width=255,max_width=1000'
        ]);

        $featured_image = $request->file('featured_image')->store('articles','public');
        $image = $request->file('featured_image')->store('articles/thumbnail', 'public');
        $thumbnail = Image::make(public_path("storage/{$image}"))->fit(400,400);
        $thumbnail->save();

        Article::create(array_merge(
            $request->except('_token', 'featured_image'),
            ['featured_image' => $featured_image],
            ['thumbnail' => $image]
        ));
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
