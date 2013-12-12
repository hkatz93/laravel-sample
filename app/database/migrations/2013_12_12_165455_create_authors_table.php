<?php

use Illuminate\Database\Migrations\Migration;

class CreateAuthorsTable extends Migration {

	public function up()
{
    Schema::create('authors', function($table)
    {
        $table->increments('id');
        $table->string('email')->unique();
        $table->string('name');
        $table->timestamps();
    });
}

public function down()
{
    Schema::drop('authors');
}

}