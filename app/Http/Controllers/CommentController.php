<?php

namespace App\Http\Controllers;

use App\comment;
use App\Post;
use App\Image;
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
        if($request->react=1)
        {     
            
            $isLiked = Comment::where('react', 1)
                                    ->where('id_user', $request->id_user)
                                    ->where('id_image', $request->id_image)
                                    ->first();
            
            if($isLiked){
                $dislike = Comment::find($isLiked->id);
                $dislike->react = 0;
                $dislike->save();
               // return "l'utilisateur vient de dislike";
            }else{
                $rowExists = Comment::where('react', 0)
                                ->where('id_user', $request->id_user)
                                ->where('id_image', $request->id_image)
                                ->where('commentaire', null)
                                ->first();
                if($rowExists)
                {
                    $like = Comment::find($rowExists->id);
                    $like->react = 1;
                    $like->save();
                   // return "l'utilisateur vient de like";
                }else{
                    $firstLike = Comment::Create(['id_user' => $request->id_user,
                                     'id_image' => $request->id_image,
                                     'react' => $request->react]);
                  //  return "l'utilisateur qui n'a jamais like vient de like";
                }   
            }
        }
        $countrows = Comment::where('react', 1)
                                    ->where('id_image', $request->id_image)
                                    ->count();
        $totalLike = Image::find($request->id_image);
        $totalLike->reacts = $countrows;
        $totalLike->save();
        return $totalLike->reacts;
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

        $images = Image::all();
        $images->where('id_post', '=', '$id');
        // $comments = Comment::where('comments',function ($q) {
        //     $q->where('id_user', '=', '$id');
        // })->get();
        return view('event.comment.eventdetails', ['posts' => $posts, 'images' => $images]);
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\comment  $comment
     * @return \Illuminate\Http\Response
     */
    

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
