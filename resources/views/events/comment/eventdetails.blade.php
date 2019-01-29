
<body>

                <h2>{{ $events->title }}</h2>
            
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Return to events' page</a>
        
    
                <strong>Name:</strong>
                {{ $events->title }}
            
                <strong>Description:</strong>
                {{ $events->description }}<br>
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
        
            

</body>