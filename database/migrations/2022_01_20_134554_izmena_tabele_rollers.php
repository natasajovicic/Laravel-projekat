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
    {
        Schema::table('rollers',function (Blueprint $table){
            $table->renameColumn('stanje','STANJE');
        });
        Schema::table('rollers', function (Blueprint $table) {
            $table->string('boja', 50)->change();
        });
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
            $table->dropColumn('test');
          $table->renameColumn('STANJE','stanje');
          });
    }
}
