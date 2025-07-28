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
        Schema::create('briefs', function (Blueprint $table) {
            $table->id();
               $table->string('ecole');
                $table->string('responsable');
                $table->string('telephone');
                $table->string('email');
                $table->string('objectif');
                $table->text('historique')->nullable();
                $table->text('besoins');
                $table->string('delai')->nullable();
                 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('briefs');
    }
};
