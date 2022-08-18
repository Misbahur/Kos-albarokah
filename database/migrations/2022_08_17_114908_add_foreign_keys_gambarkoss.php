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
        Schema::table('gambarkos', function (Blueprint $table) {
            //
            $table->foreign('kamars_id', 'kamars_id_fk5_idx')->references('id')->on('kamars')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('gambarkos', function (Blueprint $table) {
            //
            $table->dropForeign('kamars_id_fk5_idx');

        });
    }
};
