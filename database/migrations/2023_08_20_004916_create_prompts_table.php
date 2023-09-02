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
        Schema::create('prompts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('email');
            $table->string('family_name');
            $table->string('first_name');
            $table->integer('request_type');
            $table->enum('is_treated',['Oui avec success','Demande sans suite','Pas encore'])->default('Pas encore');
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prompts');
    }
};
