@extends('layouts.app')
@section('content')
<form method = "POST" action = "{{url('delete/data')}}">
	{!!csrf_field() !!}
	<input type="hidden" name="_method" value="DELETE">
<table class="table">
  <thead>
    <tr>
      <th scope="col">the posts</th>
      <th scope="col">the title of the post</th>
      <th scope="col">the description</th>
      <th scope="col">select the posts</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($admin as $data)
  	<?php
  	$theAdminData = str_replace(" ", "?", $data->title);
  	?>
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td><a href="{{url('blog-single')}}/{{$data->id}}/{{$theAdminData}}">{{$data->title}}</a></td>
      <td>{{$data->description}}</td>
      <td>
      	<input type="checkbox" name="id[]" value="{{$data->id}}">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="submit" name="softdelete" value="delete record" class="btn btn-danger">
</form>
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
<h1><a href="{{url('recycle')}}">recycle bin</a></h1>
@endsection