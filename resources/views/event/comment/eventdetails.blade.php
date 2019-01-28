
<body>

                <h2>{{ $posts->title }}</h2>
            
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Return to events' page</a>
        
    
                <strong>Name:</strong>
                {{ $posts->title }}
            
                <strong>Description:</strong>
                {{ $posts->description }}<br>
            @if(auth()->check()) 
            <form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
             @csrf
            <input type="hidden" name="id_post" value="{{ $posts->id }}">
                  
            <input type="hidden" name="id_author" value="{{ auth()->user()->id }}"><br><br>
            
            <input type="file" name="image">
          
            <button type="submit">Add an image</button><br><br>
           </form>
           @elseif(auth()->guest())
            You must login to add an image 
            <a href="{{ route('connection.connect') }}">Login</a><br>
            @endif
        @foreach ($images as $image)
        <tr>
            <td><img src="/storage/images/{{ $image->image }}" height=100px width=100px/></td>
            <td>{{ $image->id_author }}</td>
            <a class="btn btn-info" href="{{ route('image.show', $image->id) }}">Show</a>
            <form action="{{ route('posts.destroy',$posts->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form><br>            
        </tr>
       
        @endforeach
        
            

</body>