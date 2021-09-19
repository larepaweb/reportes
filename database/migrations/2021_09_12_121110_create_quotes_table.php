<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotesTable extends Migration
{
    protected $date;
    /**
     * Run the migrations.
     *
     * @return void
     */



    public function up()
    {

        $this->date = strtotime( now() );
        $this->date = strtotime("+7 day", $this->date);



        Schema::create('quotes', function (Blueprint $table) {
            $table->id();
            $table->string('quote_correlative');

            $table->json('products');

            $table->float('subtotal');
            $table->float('iva');
            $table->float('total');
            $table->date('validy_at')->default(date('Y-m-d', $this->date) );

            $table->unsignedBigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('ref_id')->unsigned();
            $table->foreign('ref_id')->references('id')->on('refs')->onDelete('cascade');

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
        Schema::dropIfExists('quotes');
    }
}
