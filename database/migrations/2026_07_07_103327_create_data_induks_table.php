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
    Schema::create('data_induks', function (Blueprint $table) {

        $table->id();

        $table->enum('jenis', ['Guru', 'Tendik']);

        $table->unsignedBigInteger('pegawai_id');

        $table->timestamps();

    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_induks');
    }
};
