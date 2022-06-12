<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\BaseController;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Repositories\BlogPostRepository;
use App\Repositories\BlogCategoryRepository;


class BlogPostController extends BaseController
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
        return view('index', compact('paginator'));

//        Вывести слаг с постов и описание с категорий
//        $post = BlogPost::all();
//        foreach ($post as $posts) {
//            echo 'Post slug: '. $posts['slug']. '<br>';
//            echo '<p>Description: </p>'. $posts->category['description']. '<br>';
//            echo '--------------------<br>';
//        }


//        $items_blog = BlogPost::paginate(2);
//
//        // dd($items->first());
//
//        return view ('index', compact('items_blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(BlogPost $post)
    {
        $item = BlogPost::findOrFail($post);

        return view(
            'blog_post',
            compact('item')
        );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = $this->blogPostRepository->getEdit($id);
        if (empty($item)) {
            abort(404);
        }
//        $categoryList = $this->blogCategoryRepository->getForComboBox();


        return view(
            'blog_post',
            compact('item')
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
