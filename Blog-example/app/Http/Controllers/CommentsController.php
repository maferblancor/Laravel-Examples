<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{
    public function store(Post $post)
    {
    	//$post->addComment(request('post'));
    	/*Comment::create([
    		'body'=>request('body'),
    		'post_id'=>$post->id
    	]); Forma 1 de hacerlo*/
    	$post->addComment(request('body'));
    	return back();

    }
}
