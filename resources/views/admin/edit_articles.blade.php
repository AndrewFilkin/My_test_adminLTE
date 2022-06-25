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
    <div>

        <div class="col-sm-6">
            <div class="form-group">
                <label>Title</label>
                <input type="text" class="form-control" placeholder="Enter ...">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Slug</label>
                <input type="text" class="form-control" placeholder="Enter ...">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Likes</label>
                <input type="number" class="form-control" placeholder="Enter ...">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Comments count</label>
                <input type="number" class="form-control" placeholder="Enter ...">
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

    <textarea id="summernote" name="editordata"></textarea>




    <script>
        $(document).ready(function () {
            $('#summernote').summernote();
        });
    </script>
@endsection
