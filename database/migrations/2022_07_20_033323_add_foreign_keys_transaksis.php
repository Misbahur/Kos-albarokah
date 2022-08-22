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
        Schema::table('transaksis', function (Blueprint $table) {
            //
            $table->foreign('kamars_id', 'kamars_id_fk2_idx')->references('id')->on('kamars')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('users_id', 'users_id_fk3_idx')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('banks_id', 'banks_id_fk6_idx')->references('id')->on('banks')->onUpdate('CASCADE')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('transaksis', function (Blueprint $table) {
            //
            $table->dropForeign('kamars_id_fk2_idx');
            $table->dropForeign('users_id_fk3_idx');
            $table->dropForeign('banks_fk6_idx');
        });
    }
};
