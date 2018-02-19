<?php

use App;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
	    $first = factory(App\Post::class)->create();
		$second = factory(App\Post::class)->create([
			'created_at' => \Carbon\Carbon::now()->subMonth()
		]);

    	$posts = App\Post::archives();

    	$this->assertEquals([
    		[
			    "month" => $first->created_at->format('F').' ',
                "year" => $first->created_at->format('Y'),
			    "published" => 1
		    ],
		    [
			    "month" => $second->created_at->format('F').'  ',
			    "year" => $second->created_at->format('Y'),
			    "published" => 1
		    ]
	    ], $posts);
    }
}
