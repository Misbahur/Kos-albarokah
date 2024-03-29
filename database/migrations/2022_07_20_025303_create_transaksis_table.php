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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kamars_id')->nullable()->index('kamars_id_fk2_idx');
            $table->foreignId('users_id')->nullable()->index('users_id_fk3_idx');
            $table->foreignId('banks_id')->nullable()->index('users_id_fk6_idx');
            $table->string('noinvoice')->unique();
            $table->date('tanggal');
            $table->enum('status', ['disetujui', 'tidak']);
            $table->integer('harga');
            $table->string('buktitf')->nullable();
            $table->date('tanggal_sewa');
            $table->integer('lama_sewa');
            $table->date('jatuh_tempo');
            $table->softDeletes();
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
        Schema::dropIfExists('transaksis');
    }
};
