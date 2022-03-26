<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flower', function (Blueprint $table) {
            $table->bigIncrements('id_flower');
            $table->string('nm_flower')->nullable();
            $table->string('img_flower')->nullable();
            $table->text('title')->nullable();
            $table->text('prod_title')->nullable();
            $table->text('new_prod_box')->nullable();
            $table->text('keterangan')->nullable();
            $table->string('kategori')->nullable();
            $table->text('icon')->nullable();
            $table->text('label')->nullable();
            $table->text('bahasa')->nullable();
            $table->text('color')->nullable();
            $table->text('thumb')->nullable();
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
        Schema::dropIfExists('flowers');
    }
}
