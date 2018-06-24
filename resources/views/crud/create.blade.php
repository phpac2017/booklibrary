<!-- create.blade.php -->
@extends('master')
@section('content')
<div class ="menu">
	<a href="{{ url('/crud/show') }}" class="btn btn-success go_home">Books Gallery</a>
	<a href="{{ url('/live_search') }}" class="btn btn-danger go_home">Books Search</a>
	<a href="{{ url('/mylist') }}" class="btn btn-warning go_home">My Books</a>
	<a href="{{ url('/') }}" class="btn btn-primary go_home">Go Main</a>
</div>
<div class="container">
<h2 class="header_title"> Add New Book </h2>
<form method="post" action="{{url('crud')}}" enctype="multipart/form-data">
	<div class="form-group row">
		{{csrf_field()}}
		<label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Title</label>
		<div class="col-sm-5">
			<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Enter Title" name="title">
		</div>
	</div>
	<div class="form-group row">
		<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Description</label>
		<div class="col-sm-5">
			<textarea name="description" rows="8" cols="65"></textarea>
		</div>
	</div>
	<div class="form-group row">
		<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">ISBN</label>
		<div class="col-sm-5">
			<input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="Enter ISBN" name="isbn">
		</div>
	</div>
	<div class="form-group row">
		<label for="smFormGroupInput" class="col-sm-2 col-form-label col-form-label-sm">Book Icon</label>
		<div class="col-sm-5">
			<input type="file" name="file" id="file"/>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-md-2"></div>
			<input type="submit" class="btn btn-primary">
		<a href="{{ url('/crud/show') }}" class="btn btn-danger">Cancel</a>
	</div>
</form>
</div>
@endsection
