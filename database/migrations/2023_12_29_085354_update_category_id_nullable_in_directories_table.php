<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('directories', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->change();
        });
    }

    public function down()
    {
        // If needed, you can add code to revert the changes
        // For example, if you want to make the column non-nullable again:
        // Schema::table('directories', function (Blueprint $table) {
        //     $table->unsignedBigInteger('category_id')->nullable(false)->change();
        // });
    }
};
