<?php
namespace App\Services\Implementations;
use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Repositories\Implementations\Repository;
use App\Repositories\Interfaces\ArticleInterface;
use App\Services\Interfaces\ArticleServiceInterface;
use Illuminate\Http\Request;

class ArticleService implements ArticleServiceInterface{
    public function __construct(public ArticleInterface $repository){

    }
    public function all(){
        return $this->repository->all();
    }
    public function store(ArticleRequest $request){
        return $this->repository->store($request);
    }
    public function show(Article $article){
        return $this->repository->show($article);
    }
    public function update(ArticleRequest $request,Article $article){
        return $this->repository->update($request,$article);

    }
    public function delete(Article $article){
        return $this->repository->delete($article);
    }
    public function search(Request $request){
        return $this->repository->search($request);
    }
} 