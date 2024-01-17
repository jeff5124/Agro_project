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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->boolean('status')->default(true);
            $table->string('race');
            $table->string('genre');
            $table->string('poid');
            $table->string('pellage');
            $table->string('couleur_yeux');
            $table->string('poid');
            $table->string('amount');
            $table->foreignId('domaine_id')->default(1)->constrained('domaines');
            $table->foreignId('espece_id')->default(1)->constrained('domaines');
            $table->foreignId('user_id')->default(1)->constrained('users');
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
        Schema::dropIfExists('projects');
    }
};
