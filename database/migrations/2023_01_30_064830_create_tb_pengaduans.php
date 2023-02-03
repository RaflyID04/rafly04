<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPengaduans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pengaduans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_masyarakat');
            $table->foreignId('id_kategori');
            $table->timestamp('tgl_pengaduan');
            $table->text('isi_laporan');
            $table->enum('status',['Pending', 'Proses', 'Ditolak', 'Selesai'])->default('Pending');
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
        Schema::dropIfExists('tb_pengaduans');
    }
}
