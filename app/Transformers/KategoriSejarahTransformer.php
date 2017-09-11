<?php


namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Kategori_sejarah;

/**
* 
*/
class KategoriSejarahTransformer extends TransformerAbstract
{
	
	public function transform(Kategori_sejarah $kategori){

		return [


			'id'				=> $kategori->id,
			'nama_kategori'		=> $kategori->nama_kategori,
			'count'				=> $kategori->count


		];
	}
}