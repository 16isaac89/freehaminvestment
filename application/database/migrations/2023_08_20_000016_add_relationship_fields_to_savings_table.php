<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSavingsTable extends Migration
{
    public function up()
    {
        Schema::table('savings', function (Blueprint $table) {
            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id', 'member_fk_8895740')->references('id')->on('members');
        });
    }
}
