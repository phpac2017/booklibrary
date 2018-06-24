<!-- edit.blade.php -->

@extends('master')
@section('content')
<div class ="menu">
	<a href="{{ url('/crud/show') }}" class="btn btn-success go_home">Books Gallery</a>
	<a href="{{ url('/live_search') }}" class="btn btn-danger go_home">Books Search</a>
	<a href="{{ url('/mylist') }}" class="btn btn-warning go_home">My Books</a>
	<a href="{{ url('/crud/create') }}" class="btn btn-info go_home">Add New Book</a>
	<a href="{{ url('/') }}" class="btn btn-primary go_home">Go Main</a>
</div>
<div class="container">
	<h2 class="header_title"> Update Book Details </h2>
	<form method="post" action="{{action('CRUDController@update', $id)}}" enctype="multipart/form-data">
		<div class="form-group row">
			{{csrf_field()}}
			<input name="_method" type="hidden" value="PATCH">
			<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
			<div class="col-sm-10">
			<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="title" name="title" value="{{$crud->title}}">
			</div>
		</div>
		<div class="form-group row">
			<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
			<div class="col-sm-10">
				<textarea name="description" rows="8" cols="80">{{$crud->description}}</textarea>
			</div>
		</div>

		<div class="form-group row">
			<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">ISBN</label>
			<div class="col-sm-5">
				<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Enter ISBN" name="isbn" value="{{$crud->isbn}}">
			</div>
		</div>	
		<div class="form-group row">
			<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Book Icon</label>
			Existing Image<img src="{{ url('/') }}/uploads/users/{{$crud->icon}}" height="100" width="100"/>
			<div class="col-sm-5">
				<input type="file" name="file" id="file"/>
			</div>
		</div>
		<div class="form-group row">
			<div class="col-md-2"></div>
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</form>
</div>
@endsection
