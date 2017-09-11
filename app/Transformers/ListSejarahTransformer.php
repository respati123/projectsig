<?php 


namespace App\Transformers;


use App\Sejarah;
use League\Fractal\TransformerAbstract;

class ListSejarahTransformer extends TransformerAbstract
{
	
	public function transform(Sejarah $sejarah){

		return [

			'id_sejarah'		=> $sejarah->id,
			'nama_sejarah'		=> $sejarah->judul, 
			'judul_kategori'	=> $sejarah->kategori->nama_kategori,
			'alamat'			=> $sejarah->alamat


		];
	}
}