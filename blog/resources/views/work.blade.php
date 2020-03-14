@extends('layouts.app')
@section('content')
<form method="POST" action = "{{url('delete/serve')}}">
  {!! csrf_field() !!}
  <input type="hidden" name="_method" value="DELETE">
<table class="table">
  <thead>
    <tr>
      <th scope="col">number of services</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">who added this</th>
      <th scope="col">select one service</th>
    </tr>
  </thead>
  <tbody>
    @foreach($admin_ser as $ser)
    <tr>
      <th scope="row">{{$ser->id}}</th>
      <td>{{$ser->title}}</td>
      <td>{{$ser->description}}</td>
      <td>{{$ser->my_user_id()->first()->name}}</td>
      <td>
        <input type="checkbox" name="id[]" value="{{$ser->id}}">
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
<input type="submit" name="softdelete" value="delete service" class="btn btn-danger">
</form>
<form method="post" action = "{{url('add/serves')}}" class = "form-group" enctype="multipart/form-data">
	{!! csrf_field() !!}
	<label>the title of the service</label>
	<input type="text" name="title" class = "form-control">
	<label>the content of the service</label>
	<input type="text" name="content" class="form-control">
	<label>what the form of the service</label>
	<input type="file" name="image" class="form-control">
	<input type="submit" name="submit" value="add service" class="btn btn-primary">
</form>
<a href="{{url('our/work')}}">go to services recycle</a>
@endsection