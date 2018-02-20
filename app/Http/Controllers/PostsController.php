<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

	public function index()
    {
//        return session('message');

	    $posts = App\Post::latest()
	                     ->filter([
	                     	'month' => request('month'),
		                     'year' => request('year')])
	                     ->get();
//	    $posts = App\Post::latest();
//
//	    if($month = request('month'))
//	    {
//	    	$posts->whereMonth('created_at', '=', Carbon::parse($month)->month);
//	    }
//
//
//	    if($year = request('year'))
//	    {
//	    	$posts->whereYear('created_at', '=', $year);
//	    }
//
//	    $posts = $posts->get();


//	    $posts = App\Post::orderBy('created_at', 'desc')->get();
	    $archives = App\Post::archives();

//	    return view('posts.index', compact(['posts', 'archives']));
		return view('posts.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

	    $this->validate(request(), [
	    	'title' => 'required',
		    'body' => 'required'
	    ]);

//	    auth()->user()->publish(
//	    	new App\Post(request(['title','body']))
//		    );

	    App\Post::create([
	    	'title' => request('title'),
	        'body' => request('body'),
//		    'user_id' => auth()->user()->id,
		    'user_id' => auth()->id()
	    ]);

	    // Перенаправить на другую страницу
	    session()->flash(
	    	'message', 'Your post have been added.'
	    );

	    return redirect('/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = App\Post::find($id);

	    return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = App\Post::find($id);
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = App\Post::find($id);

	    $this->validate(request(), [
		    'title' => 'required',
		    'body' => 'required'
	    ]);

        $post->title = request('title');
        $post->body = request('body');

        $post->save();

	    return redirect()->route('posts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
