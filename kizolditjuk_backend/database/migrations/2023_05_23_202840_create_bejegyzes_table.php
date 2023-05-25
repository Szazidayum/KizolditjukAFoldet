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
        Schema::create('bejegyzes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->foreignId('tevekenyseg_id')->references('tevekenyseg_id')->on('tevekenysegs');
            $table->integer('allapot')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bejegyzes');
    }
};
