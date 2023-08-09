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
        Schema::table('posts', function (Blueprint $table) {
            $table->string('location', 100)->after('cover');
            $table->string('date', 100)->after('location');
            $table->integer('serviceid')->after('date');
            $table->integer('stypeid')->after('serviceid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('date');
            $table->dropColumn('serviceid');
            $table->dropColumn('stypeid');
        });
    }
};
