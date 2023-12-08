<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderanHariIniTable extends Migration
{
    public function up()
    {
        Schema::create('orderan_hari_ini', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekspedisi');
            $table->integer('jumlah');
            $table->timestamp('created_at')->useCurrent();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orderan_hari_ini');
    }
}