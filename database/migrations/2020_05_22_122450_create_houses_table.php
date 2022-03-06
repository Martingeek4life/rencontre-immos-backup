<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Immobilierss', function (Blueprint $table) {
            $table->id();
            $table->string('ville');
            $table->string('quartier');
            $table->string('nom');
            $table->string('prenom');
            $table->string('phone');
            $table->string('email');
            $table->string('superficie');
            $table->string('type');
            $table->string('objet');
            $table->string('description');
            $table->string('prix');
            $table->string('photos');
            $table->string('localisation');
            $table->string('video');
            $table->string('password');
            $table->string('rue');
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
        Schema::dropIfExists('Immobilierss');
    }
}
