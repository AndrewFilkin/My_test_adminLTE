<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Blog\BaseController;
use App\Models\BlogPost;
use App\Models\BlogCategory;
use Illuminate\Http\Request;


class BlogPostController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//        Вывести слаг с постов и описание с категорий
//        $post = BlogPost::all();
//        foreach ($post as $posts) {
//            echo 'Post slug: '. $posts['slug']. '<br>';
//            echo '<p>Description: </p>'. $posts->category['description']. '<br>';
//            echo '--------------------<br>';
//        }
        $items_blog = BlogPost::all();

        // dd($items->first());

        return view ('index', compact('items_blog'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
