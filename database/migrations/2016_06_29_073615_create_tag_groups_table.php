<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagGroupsTable extends Migration {

    public function up()
    {
        Schema::create('tagging_tag_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug')->index();
            $table->string('name');
        });
    }

    public function down()
    {
        Schema::drop('tagging_tag_groups');
    }
}
