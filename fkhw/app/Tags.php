<?php

namespace fkhw;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{

	protected $table = 'tags';

	protected $fillable = ['opsi_tags'];

    public function Artikel(){
    	return $this->belongsToMany('fkhw\Artikel', 'artikel_tags', 'id_tags', 'id_artikel');
    }
}
