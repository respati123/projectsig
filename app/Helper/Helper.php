<?php 

use App\User;

function ValidatingToken($token){


	User::where('api_token','=',$token)->get();

}