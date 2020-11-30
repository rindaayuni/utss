<?php
namespace App\Http\Controllers;

use App\model\artikel;
use App\model\pengguna;
use App\model\komentar;
use App\User;
use Auth;
use Illuminate\Http\Request;
/**
* 
*/
class ArtikelController extends Controller
{
	
	public function index(){
		
		$data['list_pengguna'] = pengguna::all();
		$data['list_artikel'] = artikel::all();

		return view ("artikel.index", $data);
	} 

	public function store(Request $req){

		$artikel = artikel::find($req->nama_artikel);
		if($artikel) return back()->with('success', 'Nama Artikel Sudah Ada'); 

		$artikel = new artikel;
		$artikel->id_user = $req->id_user;
		$artikel->judul = $req->judul;
		$artikel->tab = $req->tab;
		$artikel->konten = $req->konten;
		
		$artikel->save();


		return  redirect('artikel')->with('success', 'Data Berhasil di Simpan');
	}

	public function edit($id){
		$data['artikel'] = artikel::find($id); 
		$data['list_pengguna'] = pengguna::all();
		return view ("artikel.edit",$data);
	}


	public function update(Request $req,$id){

	
		$artikel = artikel::find($id);
		$artikel->id_user = $req->id_user;
		$artikel->judul = $req->judul;
		$artikel->tab = $req->tab;
		$artikel->konten = $req->konten;
		$artikel->save();
	
		return  redirect('artikel')->with('success', 'Data Berhasil di Edit');
		
	}
	public function delete($id){
		artikel::destroy($id);
		return redirect('artikel')->with('success', 'Data Berhasil di Hapus');
		
	}

	
}