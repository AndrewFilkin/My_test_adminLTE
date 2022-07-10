<?php

namespace App\Http\Controllers;

use App\Repositories\SearchRepository;
use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{

    private $searchRepository;

    public function __construct()
    {
        $this->searchRepository = app(SearchRepository::class);
    }


    public function search(SearchRequest $request)
    {
//        $search = $request->s;
//        $paginator = BlogPost::where('title', 'LIKE', "%{$search}%")->orderBy('title')->paginate(10);
//
//        return view('index', compact('paginator'));

        $paginator = $this->searchRepository->search($request);
        return view('index', compact('paginator'));


    }
}
