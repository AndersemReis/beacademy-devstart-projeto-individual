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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->char('type', 10);
            $table->string('name');
            $table->string('enterprise')->nullable();
            $table->char('document',14);
            $table->char('ie_rg', 25)->nullable();
            $table->string('contact_name', 100);
            $table->char('cel_phone', 11);
            $table->string('email', 100);
            $table->char('phone', 11)->nullable();
            $table->char('cep', 8);
            $table->string('address', 100);
            $table->string('quarter',50);
            $table->string('city', 50);
            $table->char('state',2);
            $table->text('observation', 100)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('empresas');
    }
};
