@extends('template.admin')

@section('content')

	  	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                	<h5 class="card-header"> Data Artikel</h5>
                    <a class="btn btn-primary" href="" data-toggle="modal" data-target="#modal" type="button"><i class="fa fa-user-plus login-icon"> Tambah Data</i></a>
                    <br><br>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-light">
                                    <tr class="border-0">
	                                    <th class="border-0" style="text-align: center;">No</th>
	                                    <th class="border-0" style="text-align: center;">Nama Pembuat</th>
	                                    <th class="border-0" style="text-align: center;">Judul</th>
	                                   	<th class="border-0" style="text-align: center;">Tab</th>
	                                    <th class="border-0" style="text-align: center;">Konten</th>
	                                    <th class="border-0" style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($list_artikel as $key => $artikel)
                                    <tr>
                                        <td style="text-align: center;">{{$key+1}}</td>
                                        <td style="text-align: center;">{{$artikel->pengguna->nama}} </td>
                                        <td style="text-align: center;">{{$artikel->judul}} </td>
                                        <td style="text-align: center;">{{$artikel->tab}}</td>
                                        <td style="text-align: center;">{{$artikel->konten}}</td>
                                        <td style="text-align: center;">
                                        	<a class="btn btn-warning" href="{{url("artikel/edit/$artikel->id_artikel")}}"><i class=" fas fa-pencil-alt"> Edit</i></a>

                                            
                                            <a class="btn btn-danger" href="{{url("artikel/delete/$artikel->id_artikel")}}"><i class="fas fa-trash-alt"> Hapus</i></a>

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
        <div class="modal fade bs-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel" style="text-align: center;">Tambah Data Artikel</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <form action="{{url('artikel/store')}}" method="post" data-toggle="validator" role="form" enctype="multipart/form-data"> 
                @csrf
              
                    <div class="modal-body">        
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Nama Pembuat</label>
                            <div class="col-sm-12 col-md-10">
                               <select name="id_user" class="form-control" required="" oninvalid="this.setCustomValidity('Pilih Nama Pembuat Artikel')" oninput="setCustomValidity('')">
                                        <option value=""> Pilih Nama Pembuat Anda</option>
                                        @foreach($list_pengguna as $pengguna)
                                        <option value="{{$pengguna->id_user}}">{{$pengguna->nama}}</option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <input type="text" name="username" value="{{$pengguna->nama}}">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Judul Artikel</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="judul" placeholder="Judul Artikel" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Tab Artikel</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="tab" placeholder="Tab Artikel" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Konten Artikel</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="konten" placeholder="Konten Artikel" type="text">
                            </div>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection