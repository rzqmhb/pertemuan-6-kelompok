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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->length(255);
            $table->integer('nim')->length(255);
            $table->string('github')->length(255);
            $table->string('email')->length(255);
            $table->string('no_whatsapp')->length(255);
            $table->string('education')->length(255);
            $table->string('location')->length(255);
            $table->text('note');
            $table->string('slug')->length(255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
