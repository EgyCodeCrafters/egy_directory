<?php

use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up()
    {
        $directories = DB::table('directories')->get();

        foreach ($directories as $directory) {
            DB::table('category_directory')->insert([
                'category_id' => $directory->category_id,
                'directory_id' => $directory->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Optionally, if you want to remove the category_id column from the directories table
        // Schema::table('directories', function ($table) {
        //     $table->dropColumn('category_id');
        // });
    }

    public function down()
    {
        // You can implement the reverse operation if needed
        // For example, if you want to undo the data transfer
        // DB::table('category_directory')->truncate();

        // Optionally, if you want to add back the category_id column to the directories table
        // Schema::table('directories', function ($table) {
        //     $table->unsignedBigInteger('category_id')->nullable();
        //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');
        // });
    }
};
