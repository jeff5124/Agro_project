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
            $table->string('race')->nullable(true);
            $table->string('genre')->nullable(true);
            $table->string('poid')->nullable(true);
            $table->string('pellage')->nullable(true);
            $table->string('couleur_yeux')->nullable(true);
            $table->string('amount')->nullable(true);
            $table->string('note')->nullable(true);
            $table->date('start_at')->nullable(true);
            $table->integer('validated_by')->nullable(true);
            $table->date('validated_at')->nullable(true);
            $table->foreignId('domaine_id')->default(1)->constrained('domaines')->nullable(true);
            $table->foreignId('espece_id')->default(1)->constrained('especes');
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
