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
        Schema::create('post_votes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Post::class)->nullable()->constrained()->cascadeOnDelete();
            $table->boolean('is_upvote');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_votes');
    }
};
