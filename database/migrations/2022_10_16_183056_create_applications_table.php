<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('app_name');
            $table->string('user_id')->constrained()->on('users');
            $table->string('name_org')->nullable();
            $table->string('typ_org')->nullable();
            $table->string('name_surname');
            $table->string('position');
            $table->string('addres');
            $table->string('phone');
            $table->string('email');
            $table->string('partner_name')->nullable();
            $table->string('partner_type')->nullable();
            $table->string('priority_id')->constrained()->on('priorities');
            $table->text('proj_object')->nullable(); //6. Цели проекта и ожидаемое воздействие
            $table->text('proj_activ')->nullable(); //7. Проектная деятельность и методология
            $table->text('inovat_proj')->nullable();//9. В чем инновационность Вашего проекта?
            $table->text('support_proj')->nullable();//10. Почему Вам необходима поддержка в реализации проекта?
            $table->text('funding_donors')->nullable();//11. Финансирование со стороны других доноров:

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
        Schema::dropIfExists('applications');
    }
}
