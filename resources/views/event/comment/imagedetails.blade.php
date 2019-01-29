
<body>

<h2></h2>

<a href="{{ route('posts.index') }}"> Return to events' page</a><br>

@if(auth()->check()) 



    @if(session()->has('message'))
        <div class="alert alert-success">
            oui
            {{ session()->get('message') }}
        </div>
    @endif
</div>
{{ $iduser = auth()->user()->id }}
<!-- Form to comment the image -->
<form method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="commentaire" required>Votre Commentaire<br>
    <input type="hidden" name="id_user" value="{{ $iduser}} ">
    <input type="hidden" name="id_image" value="{{ $image->id }}">
    <br><br>
    <button type="submit">Add comment</button><br><br>
</form>

<!-- Form to like the image -->
<form method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_image" value="{{ $image->id }}">
    <input type="hidden" name="id_user" value="{{ $iduser }}">
    <input type="hidden" name="react" value="1">Like {{ $image->reacts }}
    <button type="submit">like</button><br><br>
</form>

@elseif(auth()->guest())
    You must login to comment an image and like it
    <a href="{{ route('connection.connect') }}">Login</a><br>
@endif
<tr>
<td></td>
<td>
<img src="/storage/images/{{ $image->image }}" height=100px width=100px/>

</td>
</tr>
@foreach ($comments as $comment)
<tr>
<td></td>
<td>{{ $comment->commentaire }}</td>
<td>{{ $comment->id_user }}</td><br>



</tr>

@endforeach



</body>