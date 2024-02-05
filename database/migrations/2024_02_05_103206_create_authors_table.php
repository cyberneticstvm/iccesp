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
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('abstract_id');
            $table->string('name', 125);
            $table->enum('type', ['principal', 'author'])->comment('Principal Author / Co-Author');
            $table->unsignedBigInteger('designation_id');
            $table->string('institution', 125)->nullable();
            $table->foreign('abstract_id')->references('id')->on('abstracts')->onDelete('cascade');
            $table->foreign('designation_id')->references('id')->on('designations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('authors');
    }
};
