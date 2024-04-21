<?php
namespace App\Repositories\Interfaces;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

interface ArticleInterface{
    public function all();
    public function store(ArticleRequest $request);
    public function show(Article $article);
    public function update(ArticleRequest $request,Article $article);
    public function delete(Article $article);
    public function search(Request $request);
}