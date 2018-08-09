<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
 

class PostsController extends Controller
{
    
	public function __construct()
	{
		$this->middleware('auth')->except('index', 'show');
	}

    public function index()
    {


    	$posts = Post::latest()->get();

    	$archives  = Post::archives();

    	
    	

    	return view('posts.index', ['posts'=>$posts]);
    }


    public function show($id)
    {

    	$post = Post::find($id);

   

    	return view('posts.show', ['post'=>$post]);
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	

    	try
    	{
    		$this->validate(request(), [

    			'title' => 'required',
    			'body' => 'required',

    		]);

    		auth()->user()->publish(

    			new Post(request(['title', 'body'] ))

    		);

    		session()->flash('message', 'Your post has been published'); 
    		
    		return redirect('/');
    	
    	}
    	catch(Exception $e)
    	{
    		return $e->getMessage();
    	}
    	
    	//return view('posts.create');
    }
}
