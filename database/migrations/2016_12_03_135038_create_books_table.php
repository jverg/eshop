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
            $table->increments('id');
            $table->text('title');
            $table->text('description');
            $table->string('author', 80);
            $table->string('isbn', 20)->unique();
            $table->string('category',20);
            $table->timestamps();
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
