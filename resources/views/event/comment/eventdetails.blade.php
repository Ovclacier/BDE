
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>{{ $posts->title }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Return to events' page</a>
            </div>
        </div>
    </div>
    
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $posts->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $posts->description }}
            </div>
            <form method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data">
             @csrf
            <input type="text" name="commentaire">Votre Commentaire<br>
            <input type="hidden" name="id_post" value="{{ $posts->id }}">
            <input type="hidden" name="id_user" value="auth()->user()->id"><br><br>
            <input type="file" name="image">
          
            <button type="submit">Add an image</button><br><br>
           </form>
            
        <tr>
            <td></td>
            <td>
                <form action="{{ route('posts.destroy',$posts->id) }}" method="POST">
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
               
            </td>
        </tr>
        @foreach ($comments as $comment)
        <tr>
        <td><img src="storage/images/{{$comment->image}}" height=100px width=100px />
            <td>{{ $comment->commentaire }}</td>
            <td>{{ $comment->id_user }}</td><br>
           
               
        </tr>
        @endforeach
      
            
        </div>
    </div>
