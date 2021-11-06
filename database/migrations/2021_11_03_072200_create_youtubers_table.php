<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoutubersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youtuber', function (Blueprint $table) {
            // $table->integer('no');
            // $table->primary('no');
            $table->string('name');
            $table->string('code');
            $table->primary('code'); //pk
            $table->string('salary');
            $table->text('description');

            // $table->string('duration_video');
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
        Schema::dropIfExists('youtuber');
    }
}
