
@extends('layout')

@section('title')
<title>Events</title>
@endsection







@section('contenu')
<div>
	<div class="container-fluid container blc text-center">
	<div class="row ble1 menuTop">
        <div class="col-lg-3 col-md-12 col-sm-12">
            <a class="btn btn-primary" href="{{ route('events.index') }}"> Return to events' page</a> <a class="btn btn-primary" href="{{ route('events.index') }}"> Return to events' page</a>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <h1>{{ $events->title }}</h1>
        </div>
        <div class="col-lg-3 col-md-12 col-sm-12">
        </div>
	</div>
</div>
		<div class="container container-fluid blc centerImg">
			<div class="col-lg-3 col-md-4 col-sm-12">
				<img src="img/idea.jpg" alt="" width="200" height="200">
			</div>
			<div class="col-lg-9 col-md-8 col-sm-12 descIdee">
            {{ $events->description }}
            </div>
		</div>



	</div>

		<div class="container-fluid container blc text-center ">
		
			<div class="row ble1">
				<h2>Photos</h2>
			</div>
			<div class="row">
			
				<div class="col-lg-12 col-mg-12 col-sm-12 blc">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<a href="http://www.google.fr"><img src="{{ asset('/img/pile.png') }}" alt="" width="200" height="200" alt="pile"></a>
							
						</div>
					</div>
				</div>
			</div>
			</div>
</div>


            
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Return to events' page</a>

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
            @endif
        @foreach ($images as $image)
        <tr>
            <td><img src="/storage/images/{{ $image->url_image }}" height=100px width=100px/></td>
            <td>{{ $image->id_author }}</td>
            <a class="btn btn-info" href="{{ route('image.show', $image->id) }}">Show</a>
            <form action="{{ route('events.destroy',$events->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form><br>            
        </tr>
       
        @endforeach
        
            
</div>
@endsection