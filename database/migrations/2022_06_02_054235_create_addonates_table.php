<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addonates', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('location');
            $table->string('photo');
            $table->text('description');
            $table->string('funding_goal')->default(0);
            $table->string('funding_raised')->default(0);
            $table->string('final_day')->nullable();
            $table->string('status')->default(1);
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
        Schema::dropIfExists('addonates');
    }
}
