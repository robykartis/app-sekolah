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
            $table->string('id_kelas'); //Ini Menampung id kelas
            $table->string('nama');
            $table->string('nip');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('umur');
            $table->string('telpon');
            $table->string('pengalaman');
            $table->string('jabatan');
            $table->date('date')->nullable();
            $table->string('alamat');
            $table->text('poto');
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
