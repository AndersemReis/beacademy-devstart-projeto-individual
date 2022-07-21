<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zoo', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sex');
            $table->string('image');
            $table->string('species');
            $table->string('family');
            $table->string('age');
            $table->string('weight');
            $table->string('height');
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
        Schema::dropIfExists('zoo');
    }
};
