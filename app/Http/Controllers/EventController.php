<?php

namespace App\Http\Controllers;

use App\Event;
use App\Comment;
use App\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::paginate(2);
  
        return view('events.index',compact('events'))
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.createevent');
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
        
        $event = Event::Create(
            ['title' => $request->title,
            'description' => $request->description,
            'date_event' => $request->date_event,
            'id_author' => $request->id_author,
            'recurence' => $request->recurence]
        );
        $event->save();
        $events = Event::paginate(2);
  
        return redirect()->route('events.index',compact('events'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $events = Event::find($id);

        $images = Image::where('id_event', $id)->get();
        
        return view('events.comment.eventdetails', ['events' => $events, 'images' => $images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $Events)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Events $Events)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $Events)
    {
        //
    }
}
