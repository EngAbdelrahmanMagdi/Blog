<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;
class PostController extends Controller
{
    public function index (){
        $posts = Post::all();
        return PostResource::collection($posts);
        
    }
    public function show ($postId){
        $post = Post::find($postId);
        return new PostResource($post);
    }
    public function store(StorePostRequest $request){
        $requestData = request()->all();

        $post = Post::create($requestData);
        return new PostResource($post);
    }
}
