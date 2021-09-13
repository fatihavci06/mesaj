<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->longText('content2')->nullable();
            $table->string('title3')->nullable();
            $table->longText('content3')->nullable();
            $table->string('title4')->nullable();
            $table->longText('content4')->nullable();
            $table->string('title5')->nullable();
            $table->longText('content5')->nullable();
            $table->integer('happyclients')->nullable();
            $table->integer('projects')->nullable();
            $table->integer('workers')->nullable();
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
        Schema::dropIfExists('abouts');
    }
}
