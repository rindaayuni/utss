@extends('template.admin')

@section('content')

	  	<div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                	<h5 class="card-header"> Komentar</h5>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="example4" class="table table-striped table-bordered" style="width:100%">
                                <thead class="bg-light">
                                    <tr class="border-0">
	                                    <th class="border-0" style="text-align: center;">No</th>
	                                    <th class="border-0" style="text-align: center;">Nama Pembuat</th>
	                                    <th class="border-0" style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	@foreach($list_pengguna as $key => $pengguna)
                                    <tr>
                                        <td style="text-align: center;">{{$key+1}}</td>
                                        <td style="text-align: center;">{{$pengguna->nama}} </td>
                                        
                
                                        <td style="text-align: center;">
                                        	<a class="btn btn-warning" href="{{url("komen/edit/$pengguna->id_user")}}"><i class=" fas fa-comment"> lihat Komentar</i></a>
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
    </div>

@endsection