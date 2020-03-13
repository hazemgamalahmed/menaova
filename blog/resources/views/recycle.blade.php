@extends('layouts.app')
@section('content')
<form method = "POST" action = "{{url('delete/data')}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="DELETE">
<table class="table">
  <thead>
    <tr>
      <th scope="col">the post number</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">select the post</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($deletes as $thepost)
  	<?php
  	$DeletedTitle = str_replace(" ", "?", $thepost->title);
  	?>
    <tr>
      <th scope="row">{{$thepost->id}}</th>
      <td><a href = "{{url('blog-single')}}/{{$thepost->id}}/{{$DeletedTitle}}">{{$thepost->title}}</a></td>
      <td>{{$thepost->description}}</td>
      <td>
      	<input type="checkbox" name="id[]" value="{{$thepost->id}}">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="submit" name="forcedelete" value="delete force" class = "btn btn-danger">
<input type="submit" name="restore" value="restore recoed" class="btn btn-primary" >
</form>
@endsection