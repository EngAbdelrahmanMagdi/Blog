@extends('layouts.app')
@section('123') Index @endsection
@section('abc')
<div class="text-center mt-5">
  <a href="{{route('posts.create')}}" class="btn btn-success"> Create Post </a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      @foreach ($posts as $post)
      <th scope="row">{{ $post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <td><a href="{{route('posts.show', $post['id'])}}" class="btn btn-info"> View </a></td>

    </tr>
    @endforeach


  </tbody>
</table>
@endsection()