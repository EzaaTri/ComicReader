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
        Schema::create('komiks', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('gambar')->nullable();
            $table->string('genre')->nullable();
            $table->string('status')->nullable();
            $table->year('released')->nullable();
            $table->string('artist')->nullable();
            $table->string('posted_by')->nullable();
            $table->date('updated_on')->nullable();
            $table->string('type')->nullable();
            $table->string('author')->nullable();
            $table->string('serialization')->nullable();
            $table->date('posted_on')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komiks');
    }
};