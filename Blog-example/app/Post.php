<?php

namespace App;

//Aca estoy usando mi propia clase Model que extiende de Eloquent  pero que tiene la propiedad guarded por defecto.

use App\Comment;

class Post extends Model 
{
	public function comments()
	{
		return $this->hasMany(Comment::class);
	}

	public function user()
	{
		return $this->belongsTo(user::class);
	}

	public function addComment($body)
	{
		$this->comments()->create(compact('body'));
	}
}
