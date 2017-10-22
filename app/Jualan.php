<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jualan extends Model
{
    protected $table = 'jualan';

    	public function users()
		    {
		        return $this->belongsTo('App\User','users_id');
		    }

		public function buku()
		    {
		        return $this->belongsTo('App\Buku','buku_id');
		    }
}
