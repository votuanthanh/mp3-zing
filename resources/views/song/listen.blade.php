@extends ('layouts.app')
@section('content')
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-5" style="border: ridge; float: left;">
							<div class="row" style="margin-top: 5px;">
									<img src="{{ URL::asset('img/g1.gif') }}" class="img-responsive" alt="Cinque Terre" width="100%" height="280px" >
							</div>
							<hr style="margin: 0px;">
							<div class="row">
								<div id="player">
									<audio controls autoplay style="width: 460px;height: 40px;">
									   	@foreach ($songs as $song)
									   	<source src=" {{ asset('mp3/').'/'.$song->file_name }}" type="audio/mpeg">
									               unsupported !!
									    @endforeach
									</audio>
								</div>
							</div>

						</div>
					<div class="col-md-6" style="border: ridge;margin-left: 50px; float: left;">
							<table class="table table-hover"  >
								<thead>
									<tr>
										<td colspan="3" style="font-weight: bold; text-align: center;color: blue;background-color: white;">Track information</td>
									</tr>
								</thead>
								<tbody >
									@foreach ($songs as $song)
									<tr>
											
										<th>Tên bài hát</th>
										<td>{{ $song->name }}</td>
									
									</tr>
									<tr>
										
										<th>Sáng tác</th>
										<td>{{ $song->composer->name }}</td>
									</tr>

									<tr>
										<th>Thể loại</th>
										<td>{{ $song->description }}</td>
									</tr>
									<tr>
										<th>Năm</th>
										<td>{{ $song->year }}</td>
									</tr>
									@endforeach
								</tbody>
						</table>
					</div>
				</div>
			</div>
			<hr style="color: #698B22 ">
			<h3 ><a href="">NGHE TIẾP</a></h3>
			<div class="row">
				<div class="col-md-5"><hr style="margin: 0px;border-color: #698B22"></div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<table class="table table-hover">
						<thead>
						</thead>
						<tbody>

									<tr>
										<td><a href=""></a></td>
										<td><img src="{{ URL::asset('img/play1.gif') }}" alt="" width="25" height="25"></td>
									</tr>

						</tbody>
					</table>

				</div>
			</div>
		</div>
	</body>
	</html>
@stop