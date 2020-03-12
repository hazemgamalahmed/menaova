@extends('layouts.app')
@section('content')
<div class = "welcome form-group">
<form class = "from-group" method = "post" action = "{{url('add/post')}}" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<label>title</label>
	<input type="text" name="title" class = "form-control" placeholder="the title of the post her" required=""><br>
	<label>description</label>
	<input type="text" name="description" class = "form-control" placeholder="the description of post" required=""><br>
	<label>choose subject</label>
	<select name = "content" class = "form-control" required="">
		<option value="educational">educational</option>
		<option value="programming">programming</option>
		<option value="marketing">marketing</option>
		<option value="ITsoulutions">ITsoulutions</option>
	</select><br>
	<label>hit an image please</label>
	<input type="file" name="file" class = "form-control" required=""><br>
	<input type="submit" name="submit" value="submit" class="btn btn-primary">
</form>
</div>
@endsection