<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $post=Post::orderBy('title','desc')->paginate(5) ;

        return view('posts.index')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post=new Post();
        $post->title=$request->input("title");
        $post->content=$request->input("content");
        $post->save();

        //$request->session()->flash("status","Post was created");

        return redirect()->route('posts.index')->with('state','post bien créé');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=Post::find($id);
        return view("posts.show")->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      
         $post=Post::findOrFail ($id);
         return view("posts.edit")->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'title'=>'required',
            'content'=>'required',
        ]);

        $post= Post::find($id);
        $post->title=$request->input("title");
        $post->content=$request->input("content");
        $post->save();

        //$request->session()->flash("status","Post was created");

        return redirect()->route('posts.index')->with('state','post updated succesfully');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post= Post::find($id);
        $post->delete();

        return redirect()->route('posts.index')->with('state','deleted Succeffully');

    }
    
}
