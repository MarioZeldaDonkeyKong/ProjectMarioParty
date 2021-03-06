<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('payment_name');
            $table->string('description');
            $table->decimal('value');
            $table->string('currency');
            $table->date('date');
            $table->string('note');
            $table->string('imageUrl');
            $table->timestamps();

            /*Foreign key naar account numbers*/
            $table->unsignedInteger('account_Number_id');
            $table->foreign('account_Number_id')->references('id')->on('account_numbers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
