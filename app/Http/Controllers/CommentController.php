<?php

namespace App\Http\Controllers;

use App\comment;
use App\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = Comment::Create(
            ['commentaire' => $request->commentaire,
            'id_user' => $request->id_user,
            'id_post' => $request->id_post]
        );
        $comment->save();
        $comments = Comment::all()->where('id_user', '=', '$id');
        $posts = Post::find($request->id_post);
  
        return redirect()->route('comments.show', "$request->id_post");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);

        $comments = Comment::all();
        $comments->where('id_user', '=', '$id');
        // $comments = Comment::where('comments',function ($q) {
        //     $q->where('id_user', '=', '$id');
        // })->get();
        return view('event.comment.eventdetails', ['posts' => $posts, 'comments' => $comments]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(comment $comment)
    {
        //
    }
}
