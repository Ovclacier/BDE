<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Image;
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
        $posts = Post::paginate(2);
  
        return view('event.index',compact('posts'))
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.createevent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Placeholder pour le système de upvote

        // if($request->upvotes !=null)
        // {     
            
        //     $isLiked = Comment::where('react', 1)
        //                             ->where('id_user', $request->id_user)
        //                             ->where('id_image', $request->id_image)
        //                             ->first();
            
        //     if($isLiked){
        //         $dislike = Comment::find($isLiked->id);
        //         $dislike->react = 0;
        //         $dislike->save();
        //        // return "l'utilisateur vient de dislike";
        //     }else{
        //         $rowExists = Comment::where('react', 0)
        //                         ->where('id_user', $request->id_user)
        //                         ->where('id_image', $request->id_image)
        //                         ->where('commentaire', null)
        //                         ->first();
        //         if($rowExists)
        //         {
        //             $like = Comment::find($rowExists->id);
        //             $like->react = 1;
        //             $like->save();
        //            // return "l'utilisateur vient de like";
        //         }else{
        //             $firstLike = Comment::Create(['id_user' => $request->id_user,
        //                              'id_image' => $request->id_image,
        //                              'react' => $request->react]);
        //           //  return "l'utilisateur qui n'a jamais like vient de like";
        //         }   
        //     }
        //     $countrows = Comment::where('react', 1)
        //     ->where('id_image', $request->id_image)
        //     ->count();
        //     $totalLike = Image::find($request->id_image);
        //     $totalLike->reacts = $countrows;
        //     $totalLike->save();
        //     return redirect()->back();
        // }
        
        $post = Post::Create(
            ['title' => $request->title,
            'description' => $request->description,
            'date_event' => $request->date_event,
            'author' => $request->author]
        );
        $post->save();
        $posts = Post::paginate(2);
  
        return redirect()->route('posts.index',compact('posts'))
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);

        $images = Image::where('id_post', $id)->get();
        
        return view('event.comment.eventdetails', ['posts' => $posts, 'images' => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
