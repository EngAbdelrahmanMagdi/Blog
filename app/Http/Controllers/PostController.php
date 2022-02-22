<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Routing\Controller as PostController;
use Carbon\Carbon as Carbon;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StorePostRequest;
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
    $posts = Post::all();
    $posts= post::paginate(7); 
    return view('posts.index', 
    [
      // compact('post'),
        'posts'=> $posts,
        
        
    ]
    
  );


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
     
   }

   public function show($postId)
    {
      $post = Post::find($postId);
        // $post = [
        //     "id" => 1,
        //     "title" => "First Post",
        //     "posted_by" => "Abdelrahman",
        //     "created_at" => Carbon::now()->addHour(-3)->toDateTimeString(),
        // ];
        return view('posts.show', ['post' => $post]);



        // $post = Post::find($postId); //App\Model\Post
        //$postOtherSyntax = Post::where('id', $postId)->first();
        // dd($post, $postOtherSyntax);
        //return $postId;
    }

   public function create(){
    $users = User::all();
    return view('posts.create',[
      'users' => $users,
  ]);


    //  return view('posts.create', 
    //  ['posts.create']
   //);



 
   }

  //  public function show($postId){
  //   return $postId; 
  // }
  public function store(StorePostRequest $request) {

    // request()->validate([
    //   'title'=> ['required', 'min:3'], 
    //   'description'=> ['required','min:7'],
    // ],
    // ['title.required'=> 'overrieded required message',
    // 'title.min'=>'change the min rule default message']
  
  //);

    $requestData = request()->all();
    Post::create($requestData);
  //   request()->validate([
  //     'title'=> ['required', 'min:3'], 
  //     'description'=> ['required','min:7'],
  //   ],
  //   ['title.required'=> 'overrieded required message',
  //   'title.min'=>'change the min rule default message']
  
  // );
    return redirect()->route('posts.index');



    // dd(request()->all());
    // dd($requestData->all());     
     // Post::create([
        //     'title' => $requestData['title'],
        //     'description' => $requestData['description'],
        //     'user_id' => $requestData['post_creator']
        // ]);

       

    

      //return redirect()->route('posts.index');
       // return to_route('posts.index'); in laravel 9 only
    
  }

  public function edit($id)
    {
        // $post = [
        //         "id" => 1 ,
        //         "title" => "",
        //         "description" => "",
        //     ];
        // return view("posts.edit",['post' => $post]);




        $edit = Post::find($id);
        
        return view("posts.edit",['post'=> $edit]);
    }
    

  public function update(Request $request, $id)
    {
        request()->validate([
      'title'=> ['required', 'min:3'], 
      'description'=> ['required','min:7'],
    ],
    ['title.required'=> 'title must be existed',
    'title.min'=>'title must be at least 3 character ',
    'title.unique'=>'title must be unique '
    ]
  
  );
      Post::find($id)->update($request->all());
   
   
      return redirect()->route('posts.index');







        //dd($request->all());
    }

    public function destroy(Request $request, $id)
    {
      Post::find($id)->delete($request->all());
      return redirect()->route('posts.index');

        //dd(request()->all());
    }
}
