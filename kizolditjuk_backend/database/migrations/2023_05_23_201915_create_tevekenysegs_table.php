<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tevekenyseg;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tevekenysegs', function (Blueprint $table) {
            $table->id('tevekenyseg_id');
            $table->timestamps();
            $table->string('tevekenyseg_nev');
            $table->integer('pontszam');
        });

        Tevekenyseg::create(['tevekenyseg_nev'=>'kerékpárral jöttem iskolába', 'pontszam'=>2]);
        Tevekenyseg::create(['tevekenyseg_nev'=>'ültettem fát', 'pontszam'=>5]);
        Tevekenyseg::create(['tevekenyseg_nev'=>'ültettem virágot', 'pontszam'=>1]);
        Tevekenyseg::create(['tevekenyseg_nev'=>'ültettem egyéb növényt', 'pontszam'=>2]);
        Tevekenyseg::create(['tevekenyseg_nev'=>'összeszedtem a szemetet egy közterületen, erdőben, stb', 'pontszam'=>3]);
        Tevekenyseg::create(['tevekenyseg_nev'=>'kirándultam, szabadban töltöttem időt a héten', 'pontszam'=>4]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tevekenysegs');
    }
};
