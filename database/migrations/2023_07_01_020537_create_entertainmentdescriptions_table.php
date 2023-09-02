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
        Schema::create('entertainment_descriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('label');

            $table->unsignedBigInteger('entertainment_id');
            $table->foreign('entertainment_id')->references('id')->on('entertainments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entertainmentdescriptions');
    }
};
