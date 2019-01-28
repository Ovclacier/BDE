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
            $tests = Comment::where('react', 1)
                                    ->where('id_user', $request->id_user)
                                    ->where('id_image', $request->id_image)
                                    ->first();
            
            if($tests){

                return $tests->id_image;
            }else{
                return "non";
            }

            // $liketry = Comment::Create(['id_user' => $request->id_user,
            //                 'id_image' => $request->id_image,
            //                 'react' => $request->react]);
                            
            //                 $liketry->save();
            
            
            
            //         return view('testimg', compact('tests'));
        }else{

        }
       
        
        // if($test == false && $request->reacts == 1){
        // $comment = Comment::Create(
        //     ['id_user' => $request->id_user,
        //     'id_image' => $request->id_image,
        //     'commentaire' => $request->commentaire,
        //     'react' => $request->reacts
        //     ]);
        
        // }elseif($test == true && $request->reacts == 1){

        //     $dislike = Comment::where(  ['id_image','=', $request->id_image],
        //                                 ['id_user','=', $request->id_user],
        //                                 ['react','=', 1]);

        //     $dislike->react = 0;

        //     $comment = Comment::Create(
        //         ['id_user' => $request->id_user,
        //         'id_image' => $request->id_image,
        //         'commentaire' => $request->commentaire
        //         ]);

        // }else{

        //     $comment = Comment::Create(
        //         ['id_user' => $request->id_user,
        //         'id_image' => $request->id_image,
        //         'commentaire' => $request->commentaire
        //         ]);

        // }
    
        // $comment->save();
        // //$comments = Comment::all()->where('id_image', '=', '$id');
        // //$posts = Post::find($request->id_image);
  
        // return back()->with('message',dd($test->react));
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
