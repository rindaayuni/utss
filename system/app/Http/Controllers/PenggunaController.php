<?php
namespace App\Http\Controllers;

use App\model\pengguna;
use App\model\artikel;
use App\model\komen;
use Auth;
use Illuminate\Http\Request; 
/**
* 
*/
class PenggunaController extends Controller
{
	
	public function index(){
		$data['list_pengguna'] = pengguna::all();
		$data['list_artikel'] = artikel::all();
		$data['komen'] = komen::all();

		$data['list_pengguna'] = pengguna::where('id_user', Auth::user()->id)->get();

		$data['populer'] = artikel::orderBy('id_artikel','DESC')->take(4)->get();
		return view ("pengguna.index", $data);
	} 

	public function store(Request $req){

		$komen = new komen;
		$komen->id_user = $req->id_user;
		$komen->isi = $req->isi;
		$komen->sender = 2;
		$komen->save();

		return  redirect('pengguna');
	}


}