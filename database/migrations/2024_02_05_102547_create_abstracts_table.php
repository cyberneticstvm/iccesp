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
        Schema::create('abstracts', function (Blueprint $table) {
            $table->id();
            $table->string('abstract_id', 25)->unique();
            $table->unsignedBigInteger('theme_id');
            $table->string('title');
            $table->string('doc_url')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('mobile', 10)->nullable();
            $table->foreign('theme_id')->references('id')->on('themes')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abstracts');
    }
};
