@extends('layout')

	@section('title')
	<title>Image</title>
	@endsection
	


	@section('contenu')
<div class="container container-fluid blc text-center">

<div class="row ble1 menuTop">
	<h1>Image</h1>
</div>

<a href="{{ route('events.index') }}"> Return to events' page</a><br>

@if(auth()->check()) 



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
    <input type="hidden" name="liked" value="1">Like {{ $image->liketotal }}
    <button type="submit">like</button><br><br>
</form>

@elseif(auth()->guest())
    You must login to comment an image and like it
    <a href="{{ route('connection.connect') }}">Login</a><br>
@endif
<tr>
<td></td>
<td>
<img src="/storage/images/{{ $image->url_image }}" height=100px width=100px/>

</td>
</tr>
@foreach ($comments as $comment)
<tr>
<td></td>
<td>{{ $comment->commentaire }}</td>
<td>{{ $comment->id_user }}</td><br>



</tr>
</div>
@endforeach


@endsection
