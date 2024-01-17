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
        Schema::create('espece', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('description')->nullable(true);
            $table->string('guide')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('price')->nullable(true);
            $table->foreignId('domaine_id')->nullable(true)->constrained('domaines');
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
        Schema::dropIfExists('espece');
    }
};
