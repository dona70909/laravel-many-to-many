<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('admin.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* First i get the request */
        $data = $request->all();

        /* check the request values from the input */
        $request->validate(
            [
                'post_title' => "required|min:5",
                'post_text' => "required|min:3|max:50000",
            ],

            [
                "required" => "Not valid :attribute.",
            ]
        );

        /* create a new instance of Post with the value obtained from the form */

        $post = new Post();
        $post->post_title = $data['post_title'];
        $post->post_text = $data['post_text'];
        $post->post_img = $data['post_title'];
        $post->save();

        /* redirect to the show of the new Post update */
        return redirect()->route('admin.show',$post);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  Post post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.show',compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
         /* First i get the request */
            $data = $request->all();

            /* check the request values from the input */
            $request->validate(
                [
                    'post_title' => "required|min:5",
                    'post_text' => "required|min:3|max:50000",
                ],
    
                [
                    "required" => "Not valid :attribute.",
                ]
            );
    

            $post->post_title = $data['post_title'];
            $post->post_text = $data['post_text'];
            $post->post_img = $data['post_title'];
            $post->update();
    
            /* redirect to the show of the new Post update */
            return redirect()->route('posts.show',compact('post'))
            ->with("message", "Post " . $post->post_title ." edited with success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index')
        ->with('deleted-message', "The " . $post->post_title . " post has been deleted.");
    }
}
