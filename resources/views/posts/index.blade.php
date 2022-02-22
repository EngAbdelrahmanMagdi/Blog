@extends('layouts.app')
@section('123') Index @endsection
@section('content')

<div class="text-center mt-5">
  <a href="{{route('posts.create')}}" class="btn btn-success"> Create Post </a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Posted By</th>
      <th scope="col">Created At</th>
      <th scope="col" colspan="3">Actions</th>
    </tr>
  </thead>
  <tbody>
    <!-- dd($posts) -->
    <tr>
      @foreach ($posts as $post)
      <!-- dd($posts) -->
      <th scope="row">{{ $post['id']}}</th>
      <td>{{$post['title']}}</td>
      <td>{{$post['posted_by']}}</td>
      <td>{{$post['created_at']}}</td>
      <!-- <td><a href="{{route('posts.show', $post['id'])}}" class="btn btn-info"> View </a></td> -->
      <td><a role="button" href="{{route('posts.show',$post['id'])}}" class="btn btn-success">View</a></td>
      <td><a role="button" href="{{route('posts.edit', $post['id'])}}" class="btn btn-primary">Edit</a></td>
      <td>
        <form action="{{route('posts.delete',$post['id'])}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger btn-sm " onclick="return confirm('Are you sure you want to Delete?');" id="btnDelete">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach


  </tbody>
</table>


<nav aria-label="...">
  <ul class="pagination justify-content-center">

    {{$posts->links()}}
    <!-- <li class="page-item active">
                <a class="page-link" href="#" tabindex="-1" aria-active="true">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li> -->

  </ul>

</nav>


@endsection