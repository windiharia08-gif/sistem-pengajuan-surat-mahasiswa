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
    public function up(): void
{
    Schema::table('notifikasi', function (Blueprint $table) {
        $table->foreignId('application_id')
            ->nullable()
            ->after('user_id')
            ->constrained('pengajuan_surat')
            ->onDelete('cascade');
    });
}

public function down(): void
{
    Schema::table('notifikasi', function (Blueprint $table) {
        $table->dropForeign(['application_id']);
        $table->dropColumn('application_id');
    });
}

};
