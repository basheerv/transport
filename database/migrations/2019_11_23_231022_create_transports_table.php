<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('plat_no');
            $table->string('tag_no');
            $table->string('owner_name');
            $table->string('owner_passport');
            $table->string('model');
            $table->integer('year');
            $table->string('chassis_no');
            $table->integer('emr_id');
            $table->string('city');
            $table->string('category');
            $table->string('owner_mob_number');
            $table->string('color');
            $table->string('weight');
            $table->string('temperature');
            $table->integer('status')->default(0);
            $table->date('start_date');
            $table->date('end_date');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transports');
    }
}
