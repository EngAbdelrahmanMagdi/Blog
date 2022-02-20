@extends('layouts.app')
@section("123")
    View Post
@endsection
@section("abc")
    <div class="card w-75 mx-auto">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
        <p><span class="fw-bold">Id: </span>{{ $post['id'] }}</p>
            <p> <span class="fw-bold">Title: </span>{{ $post['title'] }}</p>
            
        </div>
    </div>
    <div class="card w-75 mx-auto mt-5">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <p> <span class="fw-bold">Name: </span>{{ 'abdelrahman' }}</p>
            <p><span class="fw-bold">Created At: </span>{{ $post['created_at'] }}</p>
            
        </div>
    </div>
@endsection
