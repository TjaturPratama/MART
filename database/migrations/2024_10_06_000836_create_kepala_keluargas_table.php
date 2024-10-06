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
        Schema::create('kepala_keluargas', function (Blueprint $table) {
            $table->id();
            $table->string('kepala_keluarga');
            $table->string('no_kk')->unique();
            $table->string('path_kk')->nullable();

            $table->timestamps();
        });

        Schema::table('penduduks', function (Blueprint $table) {
            // Menambahkan foreign key constraint ke kolom no_kk di tabel kepala_keluargas
            $table->string('no_kk')->change(); // Pastikan no_kk memiliki tipe data yang benar
            $table->foreign('no_kk')
                ->references('no_kk')
                ->on('kepala_keluargas')
                ->onDelete('cascade');  // Jika data kepala_keluarga dihapus, penduduk yang terkait juga dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepala_keluargas');

        Schema::table('penduduks', function (Blueprint $table) {
            // Menghapus foreign key constraint
            $table->dropForeign(['no_kk']);
        });
    }
};
