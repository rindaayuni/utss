<?php 

namespace App\model;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class komen extends model
{
	
	public $table = "komen";
	protected $primaryKey = 'id_komen';
	public $incrementing = false;

	function pengguna(){
		return $this->belongsTo('\App\model\pengguna', 'id_user');
	}

}
