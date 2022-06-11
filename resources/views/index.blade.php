@extends('layouts.blog')

@section('content_blog')

    @foreach($paginator as $item)


        <div class="post_section">

            <span class="comment"><a href="blog_post.html">{{$item->comments_count}}</a></span>

            <h2><a href="{{route('blog.edit', $item->id)}}">{{$item->title}}</a></h2>
{{--            <a href="{{route('blog.admin.posts.edit', $post->id)}}">{{$post->title}}</a>--}}
            December 28, 2048 | <strong>Author:</strong> {{$item->user['name']}} | <strong>Category:</strong> <a
                href="#">Freebies</a>

            <img src="{{asset('img/blog/ImagesForArticles/templatemo_image_01.jpg')}}" alt="image 1"/>

            <p>Clean Blog is a <a href="http://www.templatemo.com" target="_parent">Free HTML-CSS Template</a>
                provided by <a href="#">templatemo.com</a> for everyone. Validate <a
                    href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a
                    href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Donec enim enim,
                imperdiet quis, mollis a, elementum a, diam. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit. Nulla et nunc commodo ante ornare imperdiet.</p>
            <a href="blog_post.html">Continue reading...</a>

        </div>
    @endforeach
    {{$paginator->links('vendor.pagination.custom')}}
@stop
