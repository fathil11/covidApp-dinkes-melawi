<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuals', function (Blueprint $table) {
            $table->id();
            $table->integer('otg_pre');
            $table->integer('otg_waiting');
            $table->integer('otg_positive');
            $table->integer('otg_negative');
            $table->integer('reactive_pre');
            $table->integer('reactive_waiting');
            $table->integer('reactive_positive');
            $table->integer('reactive_negative');
            $table->integer('pdp_process');
            $table->integer('pdp_negative');
            $table->integer('pdp_positive');
            $table->integer('pdp_died_unknown');
            $table->integer('healed');
            $table->integer('died_positive');
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
        Schema::dropIfExists('manuals');
    }
}
