<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToSharesTable extends Migration
{
    public function up()
    {
        Schema::table('shares', function (Blueprint $table) {
            $table->unsignedBigInteger('member_id')->nullable();
            $table->foreign('member_id', 'member_fk_8895749')->references('id')->on('members');
        });
    }
}
