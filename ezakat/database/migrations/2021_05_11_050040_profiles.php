<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Profiles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomorkk')->unique();
            $table->string('jumlah_keluarga');
            $table->string('alamat');
            $table->integer('zakat_bayar');
            $table->boolean('status_bayar')->default(false);
            $table->integer('zakat_terima');
            $table->boolean('status_terima')->default(false);
            $table->integer('id_users');
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
        Schema::dropIfExists('profiles');
    }
}
