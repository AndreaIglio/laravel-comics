<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('body');
            $table->float('price');
            $table->boolean('available');
            $table->timestamp('on_sale_date')->nullable();
            $table->string('volume');
            $table->string('trim_size')->nullable();
            $table->integer('pages');
            $table->string('rated')->nullable();
            $table->string('cover')->nullable();
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
        Schema::dropIfExists('novels');
    }
}
