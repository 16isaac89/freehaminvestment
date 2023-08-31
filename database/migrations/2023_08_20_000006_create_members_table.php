<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('freham');
            $table->string('phone_1');
            $table->string('phone_2')->nullable();
            $table->date('dob')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
