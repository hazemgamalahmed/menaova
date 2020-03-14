@extends('layouts.app')
@section('content')
<form method="POST" action="{{url('delete/serve')}}">
	{!! csrf_field() !!}
	<input type="hidden" name="_method" value="DELETE">
<table class="table">
  <thead>
    <tr>
      <th scope="col">the nubmer of the services</th>
      <th scope="col">the service title</th>
      <th scope="col">the service description</th>
      <th scope="col">select the service</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($all_dels as $del)
    <tr>
      <th scope="row">{{$del->id}}</th>
      <td>{{$del->title}}</td>
      <td>{{$del->description}}</td>
      <td>
      	<input type="checkbox" name="id[]" value="{{$del->id}}">
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
<input type="submit" name="forcedelete" value="delete force" class="btn btn-danger">
<input type="submit" name="restore" value="restore" class="btn btn-primary">
</form>
@endsection