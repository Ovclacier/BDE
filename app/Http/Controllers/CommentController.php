<?php

namespace App\Http\Controllers;

use App\Reacts;
use App\Event;
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

        if($request->liked !=null)
        {     
            
            $isLiked = Reacts::where('liked', 1)
                                    ->where('id_user', $request->id_user)
                                    ->where('id_image', $request->id_image)
                                    ->first();
            
            if($isLiked){
                $dislike = Reacts::find($isLiked->id);
                $dislike->liked = 0;
                $dislike->save();
               // return "l'utilisateur vient de dislike";
            }else{
                $rowExists = Reacts::where('liked', 0)
                                ->where('id_user', $request->id_user)
                                ->where('id_image', $request->id_image)
                                ->where('commentaire', null)
                                ->first();
                if($rowExists)
                {
                    $like = Reacts::find($rowExists->id);
                    $like->liked = 1;
                    $like->save();
                   // return "l'utilisateur vient de like";
                }else{
                    $firstLike = Reacts::Create(['id_user' => $request->id_user,
                                     'id_image' => $request->id_image,
                                     'liked' => $request->liked]);
                  //  return "l'utilisateur qui n'a jamais like vient de like";
                }   
            }
            $countrows = Reacts::where('liked', 1)
            ->where('id_image', $request->id_image)
            ->count();
            $totalLike = Image::find($request->id_image);
            $totalLike->reacts = $countrows;
            $totalLike->save();
            return redirect()->back();
        }
            if($request->commentaire != null){
                $comment = Reacts::Create(
                             ['id_user' => $request->id_user,
                             'id_image' => $request->id_image,
                             'commentaire' => $request->commentaire
                             ]);
                $comment->save();

            return redirect()->back();
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reacts  $Reacts
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Reacts  $Reacts
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reacts  $Reacts
     * @return \Illuminate\Http\Response
     */
    public function edit(Reacts $Reacts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reacts  $Reacts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reacts $Reacts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reacts  $Reacts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reacts $Reacts)
    {
        //
    }
}
