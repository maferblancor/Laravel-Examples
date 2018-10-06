<?php

namespace App;

//Extends my own Model
class Comment extends Model
{
    	/**
    	 * Comment belongs to P.
    	 *
    	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    	 */
    	public function post()
    	{
    		// belongsTo(RelatedModel, foreignKey = p_id, keyOnRelatedModel = id)
    		return $this->belongsTo(Post::class);
    	}

        public function user()
        {
            // belongsTo(RelatedModel, foreignKey = p_id, keyOnRelatedModel = id)
            return $this->belongsTo(User::class);
        }



    
}
