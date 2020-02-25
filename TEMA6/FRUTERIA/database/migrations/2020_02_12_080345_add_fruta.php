<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFruta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruta', function (Blueprint $table) {
            $table-> increments('id');
            $table-> string('nombre', 255);
            $table-> string('descripcion', 255);
            $table-> float('precio',4,2);
            $table-> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fruta', function (Blueprint $table) {
            //
        });
    }
}
