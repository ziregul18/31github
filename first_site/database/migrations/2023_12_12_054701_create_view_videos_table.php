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
        Schema::create('view_videos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('video_id');
            $table->string('time');
            $table->timestamps();

            $table->index('user_id', 'view_user_idx');
            $table->foreign('user_id', 'view_user_fk')
                ->on('users')
                ->references('id')
                ->cascadeOnDelete();

            $table->index('video_id', 'view_video_idx');
            $table->foreign('video_id', 'view_video_fk')
                ->on('videos')
                ->references('id')
                ->cascadeOnDelete();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('view_videos');
    }
};
