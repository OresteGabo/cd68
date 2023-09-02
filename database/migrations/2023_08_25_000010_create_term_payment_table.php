<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('term_payment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('amount');

            $table->unsignedBigInteger('adherents_id');
            $table->foreign('adherents_id')->references('id')->on('adherents')->onDelete('cascade');

            $table->unsignedBigInteger('terms_id');
            $table->foreign('terms_id')->references('id')->on('terms')->onDelete('cascade');

            $table->unsignedBigInteger('payment_methods_id');
            $table->foreign('payment_methods_id')->references('id')->on('payment_methods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('term_payment');
    }
};
