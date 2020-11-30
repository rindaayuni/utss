<?php 

namespace App\model;

use Illuminate\Database\Eloquent\model;

/**
* 
*/
class pengguna extends model
{
	
	public $table = "pengguna";
	protected $primaryKey = 'id_user';
	public $incrementing = false;

	function artikel(){
		return $this->belongsTo('\App\model\artikel', 'id_user');
	}

}
