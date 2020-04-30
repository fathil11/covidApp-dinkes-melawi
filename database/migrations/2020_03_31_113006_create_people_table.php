<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->tinyInteger('age');
            $table->enum('gender', ['m', 'f']);
            $table->string('phone')->nullable();
            $table->string('track')->nullable();
            $table->string('vehicle')->nullable();
            $table->enum('district', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
            $table->string('village');
            $table->string('sub_village')->nullable();
            $table->enum('status', [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]);
            $table->enum('transmission', [0, 1, 2])->default(1);
            $table->string('phenomenon')->nullable();
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
        Schema::dropIfExists('people');
    }
}
