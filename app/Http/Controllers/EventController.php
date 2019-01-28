<?php

namespace App\Http\Controllers;

use App\Events;
use App\Comment;
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
        $event = Events::paginate(2);
  
        return view('events.index',compact('event'))
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
        $eventRequest = Events::Create(
            ['title' => $request->title,
            'description' => $request->description,
            'date_event' => $request->date_event,
            'author' => $request->author]
        );
        $eventRequest->save();
        $event = Events::paginate(2);
  
        return redirect()->route('events.index',compact('event'))
            ->with('i', (request()->input('page', 1)-1)*2);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Events  $Events
     * @return \Illuminate\Http\Response
     */
    public function show(Events $Events)
    {
        //
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
