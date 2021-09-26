<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->date("activity_date");
            $table->longtext("activity_desc") ;
            $table->longtext("activity_comment")->nullable() ;
            $table->string("status")->default("pendiente") ;

            $table->string('title');
            $table->date('start');
            $table->date('end');

            $table->unsignedBigInteger('activity_customer')->unsigned();
            $table->foreign('activity_customer')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('activity_tec')->unsigned();
            $table->foreign('activity_tec')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('tasks');
    }
}
