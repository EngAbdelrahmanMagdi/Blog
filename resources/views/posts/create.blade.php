@extends('layouts.app')

@section('123') Create @endsection
@section('content')
<form method="post" action="{{route('posts.store')}}" class="mt-5">
    @csrf
    
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea name="description" class="form-control">

                </textarea>

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post creator</label>
            <select name="postCreator" class="form-control">
                <option value="1">
                    Abdelrahman
                </option>
                <option value="2">
                    Ali
                </option>
                <option value="3">
                    Ahmed
                </option>

            </select>

        </div>

        <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection