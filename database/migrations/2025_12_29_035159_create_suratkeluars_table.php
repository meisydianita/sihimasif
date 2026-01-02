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
        Schema::create('surat_keluars', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_surat', [
                                    'sk_pengangkatan', 
                                    'peminjaman_tempat_barang', 
                                    'izin_kegiatan',
                                    'undangan',
                                    'permohonan_dana',
                                    'aktif_organisasi',
                                    'peringatan'
                                ]);
            $table->string('nomor_surat', 255)->unique;
            $table->date('tanggal_surat');
            $table->string('tujuan_surat', 255);
            $table->string('perihal', 255);
            $table->string('file_surat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_keluars');
    }
};
