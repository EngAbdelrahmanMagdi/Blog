@extends('layouts.app')
@section("123")
    Create New Post
@endsection
@section("abc")
    <div class="card w-75 mx-auto">
        <div class="card-header">
            Edit Post
        </div>
        <div class="card-body">
            <form action="{{route('posts.update',$post['id'])}}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $post['title'] }}" placeholder="Post Title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Post Description</label>
                    <textarea type="text" class="form-control" rows="5" id="description" name="description" placeholder="Post Description">{{ $post['description'] }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="postedBy" class="form-label">Posted By</label>
                    <select class="form-select" id="postedBy" name="created_by" aria-label="Default select example">
                        <option value="Abdelrahman">Abdelrahman</option>
                        <option value="Ahmed">Ahmed</option>
                        <option value="Mohamed">Mohamed</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Update</button>
                </div>

            </form>
        </div>
    </div>
@endsection
