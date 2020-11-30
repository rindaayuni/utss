@extends('template.pengguna')

@section('content')
@section('profil')
<section class="container">
	<div class="jumbotron">
		@foreach($list_pengguna as $key => $pengguna)
			@if(Auth::user()->username == $pengguna->username)
				<h1 style="text-align: center;">Blog {{$pengguna->nama}}</h1>
			@endif
		@endforeach
	</div>
</section>
@endsection
<div class="container">
	<div class="col-sm-6 col-md-8 col-lg-8">
		<div class="row">
			@foreach($list_artikel as $key => $artikel)
			@if(Auth::user()->id == $artikel->id_user)
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-body">
						<img src="https://images.pexels.com/photos/262508/pexels-photo-262508.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
						<p class="text-muted">Di Buat Oleh <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$artikel->pengguna->nama}} | <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
						 {{date("d-m-Y", strtotime($artikel->created_at))}}</p>
						<h4>{{$artikel->judul}}</h3>
						<h4>{{$artikel->tab}}</h4>
						<p>{{$artikel->konten}}[...]</p>
						<a href="javascript: void(0);" class="btn btn-default">Read more...</a>
					</div>
				</div>
			</div>
			@endif
			@endforeach
		</div>
		<hr>
		<div>
			<nav aria-label="...">
				<ul class="pager">
					<li class="previous"><a href="#"><span aria-hidden="true">←</span> Older Posts</a></li>
					<li class="next disabled"><a href="#">Newer Posts<span aria-hidden="true">→</span></a></li>
				</ul>
			</nav>
		</div>

	</div>

	<div class="col-sm-6 col-md-4 col-lg-4">
		<div class="panel panel-default">
			<div class="panel-body">
				<h4 class="text-center">Tentang Saya!</h4>
				<img src="https://s3.amazonaws.com/myblog--flask-bucket/photos/comicavatar_500x500.jpg" alt="" class="img-thumbnail img-responsive">
				<h5 class="text-center" style="font-size: 30px;">{{$pengguna->nama}}</h5>
				<p></p><br><br>
				<hr>
				<h4 class="text-center">Terpopuler!</h4>
				<div class="row">
					@foreach($populer as $artikel)
					@if(Auth::user()->id == $artikel->id_user)
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<img src="https://images.pexels.com/photos/301930/pexels-photo-301930.jpeg?h=350&auto=compress&cs=tinysrgb" alt="" class="img-thumbnail img-responsive">
						</div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
							<h5>{{$artikel->judul}}</h5>
							<p class="text-muted"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> {{date("d/m/Y", strtotime($artikel->created_at))}}</p>
						</div>
					@endif
					@endforeach
				</div>
				<hr>
				<h4 class="text-center">Komentar</h4>
				<form role="Form" action="{{url('pengguna/store')}}" method="post" accept-charset="UTF-8">
					@csrf
					<div class="form-group">
						<div class="input-group">
							<input type="text" name="id_user" value="{{$pengguna->id_user}}" hidden="">
							<textarea class="form-control" type="text" name="isi" placeholder=" Masukan Komentar Anda..." style="width: 300px;">
							</textarea>
						</div><br>
						<div class="input-group">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Kirim</button>
							</span>
						</div>
					</div>
				</form>
				<div class="form-group">
					<div class="input-group">
						@foreach($komen as $komen)
        					@if($pengguna->id_user == $komen->id_user)
        						<table>
        							<tr>
        								<td>
        									@if($komen->sender == '1')
        										<p style="color: black; font-size: 15px;">{{$komen->isi}}</p>
        									@endif
        									@if($komen->sender == '2')
        										<p style="color: black; font-size: 15px; margin-left: 200px;">{{$komen->isi}}</p>
        									@endif
        								</td>
        							</tr>
        						</table>        							
        					@endif
        				@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
