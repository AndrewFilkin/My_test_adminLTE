@extends('layouts.admin')

@section('summernote')
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

@section('content')



    <h1>Classic editor</h1>

    <form method="POST" action="{{ route('admin.blog.update', $post['id']) }}">
        @method('PUT')
        @csrf
        <div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{$post['title']}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$post['slug']}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Likes</label>
                    <input type="number" class="form-control" name="likes" value="{{$post['likes']}}">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label>Comments count</label>
                    <input type="number" class="form-control" name="comments_count" value="{{$post['comments_count']}}">
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <textarea id="content_html" name="content_html">{!! $post['content_html']!!}</textarea>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



    <script>
        $(document).ready(function () {
            $('#content_html').summernote();
        });
    </script>
@endsection
