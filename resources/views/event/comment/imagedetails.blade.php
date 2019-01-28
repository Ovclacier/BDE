
<body>

<h2></h2>

<a href="{{ route('posts.index') }}"> Return to events' page</a>


{{  $iduser = auth()->user()->id}}



</div>
<form method="post" action="{{ route('comments.store') }}" enctype="multipart/form-data">
@csrf
<input type="text" name="commentaire">Votre Commentaire<br>
<input type="hidden" name="id_post" value="{{ $image->id }}">
<input type="hidden" name="id_user" value="{{$iduser}}"><br><br>
<input type="file" name="image">

<button type="submit">Add an image</button><br><br>
</form>

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