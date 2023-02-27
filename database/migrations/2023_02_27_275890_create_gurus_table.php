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
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->string('id_kelas');
            $table->string('nama');
            $table->string('nip');
            $table->string('id_kelamin');
            $table->string('id_status');
            $table->string('id_agama');
            $table->string('umur');
            $table->string('telpon');
            $table->string('pengalaman');
            $table->string('id_jabatan');
            $table->date('date')->nullable();
            $table->string('alamat');
            $table->string('poto')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
