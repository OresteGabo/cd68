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
        Schema::create('staff_entertainment', function (Blueprint $table) {
            $table->primary(['staff_id', 'entertainment_id']);
            $table->timestamps();

            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('entertainment_id');



            $table->foreign('staff_id')->references('id')->on('staffs')->onDelete('cascade');
            $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_entertainment');
    }
};
