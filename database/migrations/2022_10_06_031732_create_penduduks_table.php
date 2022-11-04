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
        Schema::create('penduduk', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('nik');
            $table->string('nama', 100);
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('alamat', 200);
            $table->string('pekerjaan', 50);
            $table->string('tempat_lahir', 100);
            $table->enum('warga', ['WNI', 'WNA']);
            $table->enum('perkawinan', ['Sudah Menikah', 'Belum Menikah']);
            $table->date('tgl_lahir');
            $table->enum('gol_darah', ['A', 'B', 'AB', 'D']);
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
        Schema::dropIfExists('penduduk');
    }
};
