@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create New Article</div>

        <div class="card-body">
            <form action="/post/store" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="image">Feature Image</label>
                    <input type="file" name="featured_image" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" cols="5" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection