<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('surname');
            $table->string('gift');
            $table->foreignId('id_donate')->constrained()->on('addonates');
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('is_publish')->nullable();
            $table->string('city')->nullable();
            $table->string('credit_card')->nullable();
            $table->string('expiration')->nullable();
            $table->string('cvv')->nullable();
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
        Schema::dropIfExists('donates');
    }
}
