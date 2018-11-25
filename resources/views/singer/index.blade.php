@extends('layouts.app')

@section('content')
	<div class="container">
		@if ($errors->has('description'))
            <div class="alert alert-{{ session('level') }}" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>>
        @endif
		<div class="d-flex justify-content-center">
			<div class="col-md-12">
				<h1>List Singer</h1>
				<div class="card">
					<div class="card-header"></div>
					<div class="card-body">
						<div class="d-flex flex-row-reverse">
							<a href="{{ route('singer.create') }}" class="btn btn-primary py-1 my-2">Create Singer</a>
						</div>
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								 @foreach ($singers as $singer)
								<tr>
									<td>{{ $singer->id }}</td>
									<td>{{ $singer->name }}</td>
									<td class="d-flex">
										<a href="#" class="btn btn-primary mr-1">View</a>
										<a href="#" class="btn btn-success mr-1">Edit</a>
										<a href="#" class="btn btn-danger mr-1">Delete</a>
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