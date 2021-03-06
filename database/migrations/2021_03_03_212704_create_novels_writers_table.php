<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsWritersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels_writers', function (Blueprint $table) {
            $table->unsignedBigInteger('novel_id');
            $table->foreign('novel_id')->references('id')->on('novels');
            $table->unsignedBigInteger('writer_id');
            $table->foreign('writer_id')->references('id')->on('writers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novels_writers');
    }
}
