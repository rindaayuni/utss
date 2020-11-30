@extends('template.admin')

@section('content')
	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Edit Artike</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="" action="{{url('artikel/update', $artikel->id_artikel)}}" method= "post">
					@csrf
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Nama Pembuat</label>
                        <div class="col-9 col-lg-10">
                            <select name="id_user" class="form-control">
							@foreach($list_pengguna as $pengguna)
								<option @if($pengguna->id_user == $artikel->id_user) selected @endif value="{{$pengguna->id_user}}">{{$pengguna->nama}}</option>
							@endforeach
						</select>	
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Judul Artikel</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="judul" value="{{$artikel->judul}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Tab Artikel</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="tab" value="{{$artikel->tab}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Konten Artikel</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="text" class="form-control" name="konten" value="{{$artikel->konten}}">
                        </div>
                    </div>
                    <div class="col-sm-6 pl-0">
                        <p class="text-right">
                            <button class="btn btn-space btn-primary">Simpan</button>
                           	<button class="btn btn-space btn-secondary">Batal</button>
                        </p>
                    </div>
           		</form>
            </div>
        </div>
    </div>
@endsection