<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kid_entertainment', function (Blueprint $table) {
            $table->primary(['kid_id', 'entertainment_id']);
            $table->timestamps();

            $table->unsignedBigInteger('kid_id');
            $table->unsignedBigInteger('entertainment_id');



            $table->foreign('kid_id')->references('id')->on('kids')->onDelete('cascade');
            $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kid_entertainment');
    }
};
