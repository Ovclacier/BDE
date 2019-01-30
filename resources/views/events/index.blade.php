@extends('layout')

@section('title')
<title>Events</title>
@endsection







@section('contenu')

<div class="container-fluid container blc text-center">
    <div class="row ble1 menuTop">
        <h1>Liste d'events</h1>
    </div>
    <div class="row blc menuTop">
        <a class="btn btn-success" href="{{ route('events.create') }}" style="margin-top:10px; margin-bottom:10px;">
            Create New Event</a>
    </div>

    <table>

        @foreach ($events as $event)
        <div class="row blc menuTop">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <a href="{{ route('events.show', $event->id) }}"><img src="img/party.jpg" alt="" width="200"
                        height="200" alt="pile"></a>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <h4>{{ $event->date_event }}</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <h4>{{ $event->title }}</h4>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <h4>18<img src="img/like.png" alt="" width="20" height="20"></h4>
                    </div>
                </div>
                <h4>{{ $event->description }} </h4>
                <a class="linkNoir" href="{{ route('events.edit', $event->id) }}">Edit</a>
            </div>
        </div>

</div>
@endforeach
</table>

{!! $events->links() !!}
</div>
@endsection