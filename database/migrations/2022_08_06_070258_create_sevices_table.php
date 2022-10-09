<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sevices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('expert');
            $table->foreignId('lang_id')->default(1)->constrained()->on('langs');
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
        Schema::dropIfExists('sevices');
    }
}
