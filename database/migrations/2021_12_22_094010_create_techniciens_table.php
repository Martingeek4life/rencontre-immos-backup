<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechniciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('techniciens', function (Blueprint $table) {
            $table->id();
            $table->string('ville');
            $table->string('telephone');
            $table->string('email');
            $table->string('nom');
            $table->string('prenom');
            $table->string('profession');
            $table->string('photos');
            $table->string('video');
            $table->string('password');
            $table->string('quartier');
            $table->string('rue');
            $table->string('localisation');
            $table->string('description');
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
        Schema::dropIfExists('techniciens');
    }
}
