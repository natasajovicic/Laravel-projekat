<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class IzmenaTabeleRollers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   //preimenuj kolonu
        Schema::table('rollers',function (Blueprint $table){
            $table->renameColumn('stanje','STANJE');
        });
        //promena strukture(phpmyadmin)
        Schema::table('rollers', function (Blueprint $table) {
            $table->string('boja', 50)->change();
        });
        //dodavanje nove tabele
        Schema::table('rollers',function (Blueprint $table){
            $table->string('test');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rollers',function (Blueprint $table){
            $table->dropColumn('test'); //brisanje
          $table->renameColumn('STANJE','stanje'); //vraca ime staro
          });
    } 
}
