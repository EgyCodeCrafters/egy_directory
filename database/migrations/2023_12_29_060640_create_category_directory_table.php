<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('category_directory', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('directory_id');
            $table->timestamps();

            //            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            //            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');

            // Add any additional columns you may need in the pivot table
            // $table->string('additional_column');

            $table->unique(['category_id', 'directory_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_directory');
    }
};
