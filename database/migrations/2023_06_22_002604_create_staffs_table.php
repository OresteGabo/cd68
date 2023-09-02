<?php

use Illuminate\Support\Facades\Hash;
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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            /**
             * 0 : User
             * 1 : Editor
             * 2 : Teacher
             * 3 : Intern
             * 4 : Admin
             * 5 : Dev
             */
            /* define('USER', 0);define('EDITOR', 1);define('TEACHER', 2);define('INTERN', 3);define('ADMIN', 4);define('DEV', 5);
             define('ROLES', [USER,EDITOR,TEACHER,INTERN,ADMIN,DEV]);
 */

            $table->boolean('is_editor')->default(0);
            $table->boolean('is_teacher')->default(0);
            $table->boolean('is_intern')->default(0);
            $table->boolean('is_admin')->default(0);
            $table->boolean('is_dev')->default(0);
            $table->boolean('is_animator')->default(0);
            $table->boolean('is_civic_volunteer')->default(0);
            //$table->string('password')->default(Hash::make(str_random(12)));
            //$table->string('password')->default("NOPASSWORD");


            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};
