<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSavingsTable extends Migration
{
    public function up()
    {
        Schema::create('savings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->decimal('target_amount', 15, 2);
            $table->date('from_date');
            $table->date('to_date');
            $table->decimal('amount_saved', 15, 2);
            $table->string('balance');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
