<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kategori_sejarah;
class Sejarah extends Model
{
    protected $fillable = [

    	'id','kategori_id','judul','alamat','deskripsi','longitude','latitude','links','api_token','image'
    ];

    protected $hidden = [
    	'api_token'
    ];

    public function kategori(){

    	return $this->belongsTo(Kategori_sejarah::class);
    }    	
}
