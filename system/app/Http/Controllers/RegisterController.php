<?php
namespace App\Http\Controllers;

use App\model\pengguna;
use App\User;
use Illuminate\Http\Request;
/**
* 
*/
class RegisterController extends Controller
{
	
	public function index(){
		
		return view ("register.index");
	} 

	public function store(Request $req){

		$pengguna = pengguna::find($req->username);
		if($pengguna) return back()->with('success', 'Akun Sudah Terdaftar'); 
 
		$user = new User;
		$user->username = $req->username;
		$user->password = bcrypt($req->password);
		$user->level = 2;
		$user->save();

		$pengguna = new pengguna;
		$pengguna->nama = $req->nama;
		$pengguna->id_user = $user->id;
		$pengguna->username = $req->username;
		$pengguna->password = bcrypt($req->password);
		$pengguna->save();


		return  redirect('login')->with('success', 'Data Berhasil di Simpan');
	}

	
}