@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->has('description'))
            <div class="alert alert-{{ session('level') }}" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>>
        @endif
         @if(Session::has('message'))
            <div class="alert alert-success"> {{ Session::get('message') }}</div>
        @endif
		<div class="d-flex justify-content-center">
			<div class="col-md-12">
				<h1>List Song</h1>
				<div class="card">
					<div class="card-header"></div>
					<div class="card-body">
						<div class="d-flex flex-row-reverse">
							<a href="{{ route('song.create') }}" class="btn btn-primary py-1 my-2">Create Song</a>
						</div>
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>#</th>
									<th>Cover Image</th>
									<th>Name</th>
									<th>Author</th>
									<th>Year</th>
									<th>FIle</th>
									<th>Description</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($songs as $song)
								<tr>
									<td>{{ $song->id }}</td>
									<td><img class="img-thumbnail" src="{{ asset('/img' .'/'. $song->{'cover_image'}) }}"></td>
									<td>{{ $song->name }}</td>
									<td>{{ $song->composer->name }}</td>
									<td>{{ $song->year }}</td>
									<td>{{ $song->file_name }}</td>
									<td>{{ $song->description }}</td>
									<td class="d-flex">
										<a href="{{ route('song.listen', ['id' => $song->id])}}" class="btn btn-primary mr-1">View</a>
										<a href="{{ route('song.edit', ['id' => $song->id])}}" class="btn btn-success mr-1">Edit</a>
										<a href="{{ route('song.delete', ['id' => $song->id])}}" class="btn btn-danger mr-1">Delete</a>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>

					</div>
				</div>
			</div>
		</div>
	</div>
@endsection