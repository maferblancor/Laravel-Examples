<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);

    }
    //
    public function index()
    {
        $posts = Post::latest()->get();//Ideal way
        //$posts = Post::OrderBy('created_at','desc')->get();
    	return view('post.index', compact('posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function show(Post $post)
    {
        
        return view('post.show', compact('post'));
    }

    public function store()
    {
        //dd(request()->all());
        //dd(request(['title','body'])); 

        //dd(request('title')); Solo tengo el titulo


        //print_r(request()->all());
        //die();
        
        //var_dump(request()->all());
        //die();
        
        //Create a new post using a request data
        //Ahora esta en PostModelo
        $this->validate(request(),[
            'title' => 'required|min:5',
            'body' => 'required'
        ]);


        //Post::create([

        //  'title' => request('title'),
        //  'body' => request('body'),
        //  'user_id' => auth()->id()

        //]); //Lo mejor es ser explicito en esto. Este es valido pero tambien puede hacerlo asi:
        auth()->user()->publish(
            new Post(request(['title','body']))
        );


        return redirect('/');
    }
}
