<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('directory_sub_category', function (Blueprint $table) {
            $table->id(); // optional
            $table->unsignedBigInteger('directory_id');
            $table->unsignedBigInteger('sub_category_id');
        
            // Foreign keys
            $table->foreign('directory_id')->references('id')->on('directories')->onDelete('cascade');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories')->onDelete('cascade');
        
            // Optional: prevent duplicates
            $table->unique(['directory_id', 'sub_category_id']);
        });
        
    }

    public function down(): void
    {
        Schema::dropIfExists('directory_sub_category');
    }
};
