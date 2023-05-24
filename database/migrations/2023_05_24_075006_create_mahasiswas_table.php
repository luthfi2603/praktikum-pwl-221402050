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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->string("nim", 9)->primary();
            $table->string("nama");
            $table->foreignId("fakultas_id")
                  ->constrained("fakultas")
                  ->onUpdate("CASCADE")
                  ->onDelete("RESTRICT");
            $table->foreignId("jurusan_id")
                  ->constrained("jurusans")
                  ->onUpdate("CASCADE");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
