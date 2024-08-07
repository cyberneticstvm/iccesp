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
        Schema::create('paper_without_abstracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('theme_id')->nullable();
            $table->string('mobile', 10)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('paper')->nullable();
            $table->string('turnitin')->nullable();
            $table->string('payment')->nullable();
            $table->unsignedBigInteger('status_id')->nullable();
            $table->enum('type', ['wa', 'asce', 'other']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paper_without_abstracts');
    }
};
