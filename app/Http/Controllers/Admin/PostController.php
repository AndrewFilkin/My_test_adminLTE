<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use App\Repositories\BlogPostRepository;
use Illuminate\Http\Request;

class PostController extends BaseController
{

    private $blogPostRepository;
    private $blogCategoryRepository;

    public function __construct()
    {
        parent::__construct();

//        $this->blogCategoryRepository = app(BlogCategoryRepository::class);
        $this->blogPostRepository = app(BlogPostRepository::class);
    }


    public function index()
    {

        $paginator = $this->blogPostRepository->getAllWithPaginate();

        return view('admin.articles', compact('paginator'));
    }

    public function show(BlogPost $blog)
    {

        $post = $blog->getOriginal();

        return view('admin.edit_articles', compact('post'));
    }

    public function update(Request $request, $id)
    {

        $post = BlogPost::find($id);

        $post->update($request->all());
        $param = $request->slug;
        return redirect()->route('admin.blog.show', [$param]);
    }
}
