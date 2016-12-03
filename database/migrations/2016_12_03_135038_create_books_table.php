<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Create books table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->string('title');
            $table->string('description');
            $table->string('author');
            $table->string('ISBN')->unique();
            $table->string('category');
            $table->string('image');
        });
    }

    /**
     * Delete books table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
