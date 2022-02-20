<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index() {

    $posts = [
        ['id'=> 1, 'title'=> 'First Post', 'posted_by'=> 'abdelrahman', 'created_at'=> '2022-02-19 10:00:00'],
        ['id'=> 2, 'title'=> 'Second Post', 'posted_by'=> 'Ali', 'created_at'=> '2022-02-20 10:00:00']

    ];
    //   $users = [
    //         ['id'=> 1, 'name'=> 'abdelrahman'], 
    //         ['id'=> 2, 'name'=> 'ali']
    //   ];
    //   return view('test',[
    //       'users'=> $users, 
    //       'greeting'=> 'this is greeting from TestController Class'
    //   ]);
      return view('posts.index', 
      [
          'posts'=> $posts,
      ]
    );
   }
}
