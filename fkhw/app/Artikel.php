<?php

namespace fkhw;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
	protected $table = 'artikel';

	protected $fillable = [
	'judul',
	'penulis',
	'isi'];

    public function Tags(){
    	return $this->belongsToMany('fkhw\Tags', 'artikel_tags', 'id_artikel', 'id_tags');
    }

    public function opsitags(){
    	return $this->Tags->lists('id');
    }
}
