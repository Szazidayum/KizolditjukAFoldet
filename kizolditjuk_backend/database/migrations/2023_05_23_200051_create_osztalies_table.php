<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Osztaly;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('osztalies', function (Blueprint $table) {
            $table->id('osztaly_id');
            $table->timestamps();
            $table->string('nev');
        });

        Osztaly::create(['nev'=>'nSZF1B']);
        Osztaly::create(['nev'=>'nSZF1A']);
        Osztaly::create(['nev'=>'nSZF2A']);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('osztalies');
    }
};
