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
        Schema::create('pengajuan_surat', function (Blueprint $table) {
            $table->id();

             $table->foreignId('user_id')
            ->constrained('users')
            ->onDelete('cascade');

        $table->foreignId('jenis_surat_id')
            ->constrained('jenis_surat')
            ->onDelete('cascade');

        $table->text('keperluan');

        $table->enum('status', [
            'PENDING',
            'APPROVED',
            'REJECTED'
        ])->default('PENDING');

        $table->text('alasan_penolakan')->nullable();

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
        Schema::dropIfExists('pengajuan_surat');
    }
};
