<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
/** 
* 
*/
class LoginController extends Controller 
{
	
	public function login(){
		return view ('login');
		
	}

	

	public function loginproses(Request $req){

		$this->validate(request(), [
			'username' => 'required',
			'password' => 'required',		

		]);

		if(Auth::attempt (['username' => $req->username, 'password' => $req->password])){
			if(Auth::user()->level ==1){
				return redirect ('admin')->with('success', ' Selamat Anda Berhasil Login');

			}else if(Auth::user()->level ==2){
				return redirect ('pengguna');
				
			}
			return redirect('login');
			
		}else{

		return redirect ('login')->with('login_error', 'data login');
		}
			
	}

	public function logout(){
		Auth::logout();
		return redirect('/');
	}

	function test(){
		$user= new user;
		$user->username= 'admin';
		$user->password=bcrypt('admin');
		$user->level = 1;
		$user->save();

		return "Berhasil";
		
			
	}
}

