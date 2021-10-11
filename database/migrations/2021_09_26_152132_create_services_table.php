<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("task");
            $table->string("tec");
            $table->string("cli");
            $table->date("service_date");
            $table->longtext("desc");
            $table->string("type_visit");
            $table->string("in_time");
            $table->string("out_time")->default( date('H:i') );
            $table->string("read_img");
            $table->longtext("pendientes")->nullable();
            $table->string("status")->default('Pendiente');
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
        Schema::dropIfExists('services');
    }
}
