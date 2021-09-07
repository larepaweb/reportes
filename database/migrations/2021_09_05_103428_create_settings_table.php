<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('num_service');
            $table->string('num_mantain');
            $table->string('moneda');
            $table->string('iva');
            $table->string('isr');
            $table->string('logo');
            $table->string('watermark');
            $table->string('payment');
            $table->string('warranty');
            $table->string('requeriments');
            $table->string('mail_services');
            $table->string('mail_mantain');
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
        Schema::dropIfExists('settings');
    }
}
