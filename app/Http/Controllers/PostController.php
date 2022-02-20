<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller as PostController;
use Carbon\Carbon as Carbon;
use App\Models\Post;

class PostController extends Controller
{
   public function index() {
    
      // $test= Post::where('titel','our post')->get(); 
      // dd($test);


    $posts = [
        ['id'=> 1, 'title'=> 'First Post', 'posted_by'=> 'abdelrahman', 'created_at'=> '2022-02-19 10:00:00'],
        ['id'=> 2, 'title'=> 'Second Post', 'posted_by'=> 'Ali', 'created_at'=> '2022-02-20 10:00:00'],
        ['id'=> 3, 'title'=> 'Third Post', 'posted_by'=> 'Ahmed', 'created_at'=> '2022-02-30 10:00:00']

    ];


    // $postss=Post::all();
    // dd($postss);




    //   $users = [
    //         ['id'=> 1, 'name'=> 'abdelrahman'], 
    //         ['id'=> 2, 'name'=> 'ali']
    //   ];
    //   return view('test',[
    //       'users'=> $users, 
    //       'greeting'=> 'this is greeting from TestController Class'
    //   ]);
    // var_dump($posts);
    // exit;
    // dd($posts);
      return view('posts.index', 
      [
          'posts'=> $posts,
      ]
    );
   }

   public function show($id)
    {
        $post = [
            "id" => 1,
            "title" => "First Post",
            "posted_by" => "Abdelrahman",
            "created_at" => Carbon::now()->addHour(-3)->toDateTimeString(),
        ];
        return view('posts.show', ['post' => $post]);



        // $post= Post::find($id);
        // // $postOtherSyntax=Post
        // return $id;
    }

   public function create(){
     return view('posts.create', 
     ['posts.create']
   );



  //  $users= User::all();
   }

  //  public function show($postId){
  //   return $postId; 
  // }
  public function store() {
    $requestData = request(); 
    // dd(request()->all());
    dd($requestData->all());
    




    // Post::create(['title'=>$requestData['title'], 
    //     'description'=>$requestData['description']
    //   ]);

      //return redirect()->route('posts.index');
    
  }

  public function edit($id)
    {
        $post = [
                "id" => 1,
                "title" => "Title of the post",
                "description" => "This is my post description.",
            ];
        return view("posts.edit",['post' => $post]);
    }

  public function update(Request $request, $id)
    {
        dd($request->all());
    }

    public function destroy($id)
    {
        dd(request()->all());
    }
}
