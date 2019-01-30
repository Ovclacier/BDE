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

    public function indexIdees()
    {
        $events = Event::where('state', 1)->paginate(2);
  
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
