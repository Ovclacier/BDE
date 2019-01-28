
<body>

                <h2>{{ $posts->title }}</h2>
            
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Return to events' page</a>
        
    
 {{$iduser = auth()->user()->id}}

                <strong>Name:</strong>
                {{ $posts->title }}
            
                <strong>Description:</strong>
                {{ $posts->description }}
        
            <form method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
             @csrf
            <input type="hidden" name="id_post" value="{{ $posts->id }}">
            <input type="hidden" name="id_author" value="{{$iduser}}"><br><br>
            <input type="file" name="image">
          
            <button type="submit">Add an image</button><br><br>
           </form>
            
        
        @foreach ($images as $image)
        <tr>
            <td><img src="/storage/images/{{ $image->image }}" height=100px width=100px/></td>
            <td>{{ $image->id_author }}</td>
            <a class="btn btn-info" href="{{ route('image.show',$image->id_image) }}">Show</a>
            <form action="{{ route('posts.destroy',$posts->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form><br>            
        </tr>
       
        @endforeach
        
            

</body>