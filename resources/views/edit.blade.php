@extends('layout')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<h1>Edit Image</h1>
				<img src="/{{$imageInView->image}}" alt="" class="img-thumbnail">
				<form action="/update/{{$imageInView->id}}" method="POST" enctype="multipart/form-data">
					{{csrf_field()}}
					<div class="form-control">
						<input type="file" name="image"><br>
					</div>
					<button type="submit" class="btn btn-warning">Edit</button>
				</form>
			</div>
		</div>
	</div>
@endsection