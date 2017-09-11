<?php

namespace App\Transformers;

use App\Sejarah;
use App\Kategori_sejarah;
use League\Fractal\TransformerAbstract;

class SejarahTransformers extends TransformerAbstract
{


	public function transform(Sejarah $sejarah){


		
				return [

					'id'						=> $sejarah->id,
					'id_kategori'				=> $sejarah->kategori->id,
					'nama_kategori'				=> $sejarah->kategori->nama_kategori,
					'judul_sejarah'				=> $sejarah->judul,
					'alamat'					=> $sejarah->alamat,
					'deskripsi'					=> $sejarah->deskripsi,
					'image'						=> $sejarah->image,
					'longitude'					=> $sejarah->longitude,
					'latitude'					=> $sejarah->latitude,
					'link_youtube'				=> $sejarah->links,
					'created'					=> $sejarah->created_at->diffForHumans(),


				];
		
	}

}