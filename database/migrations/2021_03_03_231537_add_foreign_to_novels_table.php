<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignToNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('novels', function (Blueprint $table) {
            $table->unsignedBigInteger('serie_id')->after('id')->nullable();
            $table->foreign('serie_id')->references("id")->on('series')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('novels', function (Blueprint $table) {
            $table->dropForeign('novels_serie_id_foreign');
            $table->dropColumn('serie_id');
        });
    }
}
