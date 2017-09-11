<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSejarahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sejarahs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('kategori_id')->unsigned();
            $table->string('judul',100);
            $table->text('alamat');
            $table->text('deskripsi');
            $table->float('longitude', 50);  
            $table->float('latitude', 50);
            $table->string('links', 255);
            $table->string('api_token', 60)->nullable();
            $table->timestamps();
            
        });

        Schema::create('kategori_sejarahs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nama_kategori');
            $table->timestamps();
            

        });


       Schema::table('sejarahs', function($table) {
            $table->engine = "InnoDB";
            $table->foreign('kategori_id')->references('id')->on('kategori_sejarahs')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sejarahs');
        Schema::table('sejarahs', function($table){

            $table->dropForeign(['kategori_id']); 
        });
    }
}
