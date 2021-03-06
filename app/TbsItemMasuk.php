<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TbsItemMasuk extends Model
{
    //

         protected $fillable = ['id_tbs_item_masuk','session_id','id_produk','jumlah_produk'];
     protected $primaryKey = 'id_tbs_item_masuk';

    	public function produk()
		  {
		  	return $this->hasOne('App\Produk','id','id_produk');
		  }
}
