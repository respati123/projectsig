<?php 

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Sejarah;

class DetailSejarahTransformer extends TransformerAbstract{


	public function transform(Sejarah $sejarah){


		return [


			'gambar'			=> $sejarah->image,
			'judul_sejarah'		=> $sejarah->judul,
			'alamat'			=> $sejarah->alamat,
			'latitude'			=> $sejarah->latitude,
			'longitude'			=> $sejarah->longitude,
			'youtube'			=> $sejarah->links,
			'deskripsi'			=> $sejarah->deskripsi 
		];
	}

}