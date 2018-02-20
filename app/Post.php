<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
	    if($month = $filters['month'])
	    {
	    	$query->whereMonth('created_at', '=', Carbon::parse($month)->month);
	    }


	    if($year = $filters['year'])
	    {
	    	$query->whereYear('created_at', '=', $year);
	    }
    }

    public static function archives()
    {
		return static::selectRaw(
	    'to_char(to_timestamp(to_char(extract(MONTH from created_at), \'999\'), \'MM\'), \'Month\') AS MONTH,
	    	 extract(YEAR FROM created_at) AS YEAR,
	    	  count(*) AS published')
		      ->orderByRaw('min(created_at) desc')
		      ->groupBy('year','month')
		      ->get()
		      ->toArray();
    }

    public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}

	/*
	 *  >>> $post->tags()->attach(3);
	    >>> $post->tags()->attach(4);
		>>> $post->tags()->attach($tag->id);
		>>> $post->tags()->detach($tag->id);
	*/
}
