<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgreementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('contruct_with_driver');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('company_name');
            $table->string('comp_address');
            $table->string('comp_office_no');
            $table->string('comp_licence');
            $table->string('com_mob_no');
            $table->string('meter_reding');
            $table->string('select_price');
            $table->decimal('price');
            $table->string('cheques');
            $table->string('plat_no');
            $table->string('agent');
            $table->string('agent_name');
            $table->string('agent_email');
            $table->string('agent_address');
            $table->string('agent_emr_id');
            $table->string('agent_company_name');
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
        Schema::dropIfExists('agreements');
    }
}
