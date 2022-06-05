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
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_sapi');
            $table->string('foto_sapi');
            $table->string('no_eartag');
            $table->string('jenis_sapi');
            $table->string('jenis_kelamin');
            $table->string('tanggal_lahir');
            $table->biginteger('berat_badan');
            $table->biginteger('tinggi_pundak');
            $table->biginteger('lebar_dada');
            $table->biginteger('panjang_badan');
            $table->string('status_kesehatan');
            $table->text('keterangan_perawatan_khusus');
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
        Schema::dropIfExists('posts');
    }
};
