<?php
namespace App\Http\Controllers;

use App\model\pengguna;
use Auth;
use Illuminate\Http\Request; 
/**
* 
*/
class AdminController extends Controller
{
	
	public function index(){
		
		return view ("admin.index");
	} 

	public function user(){
		$data['list_pengguna'] = pengguna::all();
		return view ("admin.user", $data);
	} 

}