<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('nik', 16)->unique();            // NIK (unik, maksimal 16 karakter)
            $table->string('nama');                         // Nama
            $table->text('alamat');                         // Alamat
            $table->string('tempat_lahir');                 // Tempat Lahir
            $table->date('tanggal_lahir');                  // Tanggal Lahir
            $table->string('agama');                        // Agama
            $table->string('no_kk', 16);                    // Nomor KK
            $table->string('status');                       // Status (menikah, belum menikah, dll)
            $table->string('no_telepon', 18)->nullable();   // No. Telepon (opsional)
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('path_ktp')->nullable();         // Path file KTP (opsional)
            $table->string('path_akte')->nullable();        // Path file Akte (opsional)
            $table->string('path_pp')->nullable();          // Path file Paspor (opsional)
            $table->string('path_kk')->nullable();          // Path file Paspor (opsional)


            $table->timestamps();                           // Timestamps (created_at dan updated_at)


        });
    }
};
