<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('title_ky');
            $table->string('title_tr');
            $table->longText('description_ky')->nullable();
            $table->longText('description_tr')->nullable();
            $table->string('file_path_ky')->nullable();
            $table->string('file_path_tr')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('subcategory_id');
            $table->index('subcategory_id', 'file_subcategory_idx');
            $table->foreign('subcategory_id', 'file_subcategory_fk')
                ->on('subcategories')
                ->references('id')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
