<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->json('file_sk')->nullable()->after('alamat');
            $table->json('file_sertifikat')->nullable()->after('file_sk');
        });

        Schema::table('tendiks', function (Blueprint $table) {
            $table->json('file_sk')->nullable()->after('alamat');
            $table->json('file_sertifikat')->nullable()->after('file_sk');
        });
    }

    public function down(): void
    {
        Schema::table('gurus', function (Blueprint $table) {
            $table->dropColumn(['file_sk', 'file_sertifikat']);
        });

        Schema::table('tendiks', function (Blueprint $table) {
            $table->dropColumn(['file_sk', 'file_sertifikat']);
        });
    }
};