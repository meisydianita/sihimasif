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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('npm', 16)->unique;
            $table->string('nama_lengkap', 255);
            $table->year('tahun_masuk');
            $table->enum('jabatan', [
                    'ketua_umum',
                    'sekretaris_umum',
                    'bendahara_umum',
                    'kepala_divisi',
                    'sekretaris_divisi', 
                    'anggota'
                    ]);
            $table->enum('divisi', [
                    'Kaderisasi',
                    'Kesekretariatan',
                    'Mebiskraf',
                    'PSDM',
                    'PM',
                    'Kerohanian'
                    ]);
            $table->enum('status', ['Aktif', 'Tidak Aktif']);
            $table->string('email');
            $table->string('no_hp');
            $table->string('alamat');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
