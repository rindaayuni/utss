<?php 

namespace App\model;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class artikel extends model
{
	
	public $table = "artikel";
	protected $primaryKey = 'id_artikel';
	public $incrementing = false;

	function pengguna(){
		return $this->belongsTo('\App\model\pengguna', 'id_user');
	}

}
