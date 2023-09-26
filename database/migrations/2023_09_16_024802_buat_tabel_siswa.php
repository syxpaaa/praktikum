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
        Schema::create('tb_siswa',function(Blueprint $tabel){
            $tabel->integer('nisn');
            $tabel->string('nama',30,)->nullable();
            $tabel->string('alamat')->nullable();
            $tabel->string('no_tlp',13);
            $tabel->string('kode_kelas',10);
            $tabel->timestamps();
            $tabel->primary('nisn');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_siswa');
    }
};
