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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("author");
            $table->string("title");
            $table->text("cover");
            $table->string('location', 100);
            $table->string('date', 100);
            $table->integer('serviceid');
            $table->integer('stypeid');
            $table->bigInteger('status')->default(0);
            $table->integer('fstatus')->default('1');
            $table->string('hypelinks', 300)->nullable();
            $table->integer('featured_post')->default(0);
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
