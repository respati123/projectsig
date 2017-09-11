<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Sejarah;

class Kategori_sejarah extends Model
{
    protected $fillable = [

    	'id','nama_kategori'
    ];

    public function sejarah(){

    	return $this->hasMany(Sejarah::class);
    }


    public static function getDataForBeranda(){

    	return Kategori_sejarah::all();

    }
}
