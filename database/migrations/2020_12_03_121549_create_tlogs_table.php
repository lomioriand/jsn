<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tlogs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('uid');
            $table->string('type');
            $table->double('amount');
            $table->date('date');
            $table->string('bene');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tlogs');
    }
}
