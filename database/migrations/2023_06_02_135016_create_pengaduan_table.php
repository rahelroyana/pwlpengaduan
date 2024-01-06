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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('tempat');
            $table->string('jenis_kejahatan');
            $table->string('nama');
            $table->text('detail_kejadian');
            $table->string('status_pengaduan');
            $table->unsignedBigInteger('akun_id');
            $table->timestamps();

            $table->foreign('akun_id')->references('id')->on('akun')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengaduan');
    }
};
