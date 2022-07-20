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
        Schema::create('kamars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cabangs_id')->nullable()->index('cabangs_id_fk1_idx');
            $table->string('kode')->unique();
            $table->double('harga');
            $table->integer('panjang');
            $table->integer('lebar');
            $table->string('gambar');
            $table->text('deskripsi');
            $table->enum('status', ['sewa','tidak']);
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
        Schema::dropIfExists('kamars');
    }
};
