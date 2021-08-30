<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
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

            $table->string('business_name', 100)->nullable();
            $table->string('contact_name', 100);
            $table->text('address', 1500)->nullable();
            $table->string('phone', 10)->nullable();
            $table->string('nit', 11)->nullable();
            $table->enum('payment_method', ['contra entrega', '7 dias', '15 dias', '30 dias'] )->default('contra entrega')->nullable();
            $table->boolean('isr')->nullable();

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

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
        Schema::dropIfExists('profiles');
    }
}
