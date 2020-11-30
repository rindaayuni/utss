<?php
namespace App\Http\Controllers;

use App\model\komen;
use App\model\pengguna;
use App\model\artikel;
use App\User;
use Auth;
use Illuminate\Http\Request;
/**
* 
*/
class KomenController extends Controller
{
	
	public function index(){
		
		$data['list_pengguna'] = pengguna::all();
		$data['list_komen'] = komen::all();

		return view ("komen.index", $data);
	} 

	public function store(Request $req){

		$komen = new komen;
		$komen->id_user = $req->id_user;
		$komen->isi = $req->isi;
		$komen->sender = 1;
		$komen->save();

		$id_user = $req->id_user;
		return  redirect("komen/edit/".$id_user);
	}

	public function edit($id){
		
		$data['pengguna'] = pengguna::find($id);
		$data['komen'] = komen::all();
		return view ("komen.edit",$data);
	}


	
	
	public function delete($id){
		komen::destroy($id);
		return redirect('komen')->with('success', 'Data Berhasil di Hapus');
		
	}

	
}