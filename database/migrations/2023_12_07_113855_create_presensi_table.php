<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePresensiTable extends Migration
{
    public function up()
    {
        Schema::create('presensi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->timestamp('waktu');
            $table->string('posisi');
        });
    }

    public function down()
    {
        Schema::dropIfExists('presensi');
    }
}