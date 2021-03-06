
@extends('layout')

@section('title')
<title>Events</title>
@endsection

@section('contenu')
	<div class="container-fluid container blc text-center">
		<div class="row ble1 menuTop">
	        <div class="text-center">
	            <h1>Titre: {{ $events->title }}</h1>
	        </div>
		</div>
		<div class="row">
	        <div class="col-lg-3 col-md-3 col-sm-3">
	            <a class="btn btn-primary" href="{{ route('events.index') }}"> Return to events' page</a> 
	        </div>
			<div class="col-lg-6 col-md-6 col-sm-6 marginTop25">
	        	<u>Description :</u><br>{{ $events->description }}
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-3"></div>
	    </div>
		<div class="marginTop50">
			<form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
	             @csrf
	            <input type="hidden" name="id_event" value="{{ $events->id }}">
	                  
	            <input type="hidden" name="id_auteur" value="{{ auth()->user()->id }}"><br><br>
	            
	            <input type="file" name="url_image">
	          
	            <button type="submit">Add an image</button><br><br>
	        </form>
	    </div>
            <!--  il faudrait mettre l'option pour ajouter des photos à coter de "Photos" ou en dessous 			
				
			@if(auth()->check()) 
            <form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
             @csrf
            <input type="hidden" name="id_event" value="{{ $events->id }}">
                  
            <input type="hidden" name="id_auteur" value="{{ auth()->user()->id }}"><br><br>
            
            <input type="file" name="url_image">
          
            <button type="submit">Add an image</button><br><br>
           </form>
           @elseif(auth()->guest())
            You must login to add an image 
            <a href="{{ route('connection.connect') }}">Login</a><br>
            @endif -->

		
		<div class="ble1 row">
			<h2>Photos</h2>
		</div>
		<div class="row">
        @foreach ($images as $image)
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="{{ route('image.show', $image->id) }}"><img src="/storage/images/{{ $image->url_image }}" alt="" width="200" height="200" alt="pile"></a>
			</div>
			@endforeach
		</div>

	</div>
@endsection