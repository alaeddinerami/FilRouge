<?php

namespace App\Http\Controllers\client;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Repositories\Interfaces\ArticleInterface;
use App\Services\Implementations\ArticleService;
use App\Services\Interfaces\ArticleServiceInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    
    public function __construct(public ArticleServiceInterface $service)
    {
       
    }
    public function index()
    {
        $articles = $this->service->all();

        return view('client.library.index', compact('articles'));
    }

    public function store(ArticleRequest $request)
    {
        $this->service->store($request);
        return redirect()->back()->with([
            'message' => 'Article created successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }

    public function show(Article $article)
    {
        $art = $this->service->show($article);
        // dd($art)
        return view('client.library.exploreArticle', compact('art'));
    }



    public function update(ArticleRequest $request, Article $article)
    {
        // dd(
        $this->service->update($request, $article);
        // );
        return redirect()->back()->with([
            'message' => 'Article updated successfully!',
            'operationSuccessful' => $this->operationSuccessful = true,
        ]);
    }


    public function destroy(Article $article)
    {
        $this->service->delete($article);

        return redirect('article')->with([
            'message' => 'Article deleted successfully!',
            'operationSuccessful' => true,
        ]);
    }

    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string', 
        ]);
        $articles = $this->service->search($request);
        return response()->json($articles);
    }
}
