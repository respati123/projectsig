<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transformers\SejarahTransformers;
use App\Transformers\KategoriSejarahTransformer;
use App\Transformers\ListSejarahTransformer;
use App\Transformers\DetailSejarahTransformer;
use App\Sejarah;
use App\User;
use App\Kategori_sejarah;
use Illuminate\Support\Facades\DB;


class APIController extends Controller
{   

    public $data = "";
    

    public function __construct(Request $request){

        $subs = substr($request->header('Authorization'), 7, 60);
        $this->data = $this->CheckingApiToken($subs);
        return $this->data;
        
    }

    public function getBeranda(Request $request, Sejarah $sejarah){

        if(count($this->data) < 1) {

            return 'Unauthenticated';

        }

        $kategori       = Kategori_sejarah::getDataForBeranda();

        $kategoriResponse = fractal()
            ->collection($kategori)
            ->transformWith(new KategoriSejarahTransformer)
            ->toArray();


        $sejarah = Sejarah::limit(5)->get();
        $sejarahResponse = fractal()
            ->collection($sejarah)
            ->transformWith(new SejarahTransformers)
            ->toArray(); 

        return response()->json([

            'sejarah'   => $sejarahResponse,
            'kategori'  => $kategoriResponse
        ],200); 
        
    }


    private function CheckingApiToken($token){


        return User::where('api_token','=',$token)->get();

    }   


    public function getListSejarah($id){
    
        if(count($this->data) < 1){

            return "Unauthenticated";
        }

        $listSejarah = Sejarah::where('kategori_id','=',$id)->get();

        $response = Fractal()
                ->collection($listSejarah)
                ->transformWith(new ListSejarahTransformer)
                ->toArray();

        return response()->json($response, 200);
    }

    public function getDetailSejarah($id){

        if(count($this->data) < 1){

            return "Unauthenticated";
        }

        $detailSejarah = Sejarah::where('id','=',$id)->get();

        $response = Fractal()
                ->collection($detailSejarah)
                ->transformWith(new DetailSejarahTransformer)
                ->toArray();

        return response()->json($response, 200);
    }
}
