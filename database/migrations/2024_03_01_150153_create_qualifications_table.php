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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->float('nota1');
            $table->float('nota2');
            $table->float('nota3');
            $table->float('promedio');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
