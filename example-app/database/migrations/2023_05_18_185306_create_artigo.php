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
        Schema::create('artigo', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('id_autor');
            $table->string('artigo');
            $table->date('publicacao');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artigo');
    }
};
