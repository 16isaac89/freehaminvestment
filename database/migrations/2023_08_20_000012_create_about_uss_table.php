<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUssTable extends Migration
{
    public function up()
    {
        Schema::create('about_uss', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('vision');
            $table->longText('mission');
            $table->longText('about')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
