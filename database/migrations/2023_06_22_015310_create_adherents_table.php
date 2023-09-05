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
        Schema::create('adherents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();


            /**
             * User
             */
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            /**
             * Tranche d'âge
             */
            ///TODO Age gap should be deleted , because the data can be calculated using the date of birth
            /*$table->unsignedBigInteger('age_gap_id');
            $table->foreign('age_gap_id')->references('id')->on('age_gaps')->onDelete('cascade');*/



            /**
             * Numéro et nom de la rue
             */
            //$table->string('address');

            /**
             * Code postale (trouvé dans base de table des codes postaux ville
             */
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

            /**
             * QPV (Quartier politique de la ville)
             */
            $table->boolean('QPV');

            /**
             * Numéro de télephone
             */
            //$table->string('tel');

            /**
             * Email
             */
            //$table->string('email');

            /**
             * Lieu de naissance
             */
            $table->unsignedBigInteger('place_of_birth')->nullable();
            $table->foreign('place_of_birth')->references('id')->on('countries')->onDelete('cascade');

            /**
             * Nationalité
             */
            $table->unsignedBigInteger('citizenship')->nullable();
            $table->foreign('citizenship')->references('id')->on('countries')->onDelete('cascade');

            /**
             * situation administrative
             */

            $table->unsignedBigInteger('legal_situation_id')->nullable();
            $table->foreign('legal_situation_id')->references('id')->on('legal_situations')->onDelete('cascade');


            /**
             * Situation familiale
             */
            $table->unsignedBigInteger('marital_status_id')->nullable();
            $table->foreign('marital_status_id')->references('id')->on('marital_statuses')->onDelete('cascade');



            /**
             * Revenu
             */
            $table->unsignedBigInteger('income_type_id')->nullable();
            $table->foreign('income_type_id')->references('id')->on('income_types')->onDelete('cascade');


            /**
             * Date d'inscription
             */
            $table->date('registration_date')->nullable();

            /**
             * Date d'entrée en France
             */
            $table->date('french_entry_date')->nullable();

            /**
             * Niveau d'étude
             */
            $table->unsignedBigInteger('education_level_id')->nullable();
            $table->foreign('education_level_id')->references('id')->on('education_levels')->onDelete('cascade');


            /**
             * Date de sortie
             */
            $table->date('exit_date')->nullable();

            /**
             * CIR(contrat d'integration républiquain)
             */
            $table->boolean('CIR');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adherents');
    }
};
