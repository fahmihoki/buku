<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasok extends Model
{
    protected $table ='pasok';

    	public function distri()
		    {
		        return $this->belongsTo('App\Distri','distri_id');
		    }

		public function buku()
		    {
		        return $this->belongsTo('App\Buku','buku_id');
		    }
}