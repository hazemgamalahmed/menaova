@extends('layouts.app')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">number of services</th>
      <th scope="col">title</th>
      <th scope="col">content</th>
      <th scope="col">select one service</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
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
@endsection