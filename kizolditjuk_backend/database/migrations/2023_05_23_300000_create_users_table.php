<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->foreignId('osztaly_id')->references('osztaly_id')->on('osztalies');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        User::create(['name'=>'Molnár Szabrina', 'email'=>'szabrinamolnar@gmail.com', 'osztaly_id'=>2, 'password'=>'123']);
        User::create(['name'=>'Paál Ádám', 'email'=>'paaladam@gmail.com', 'osztaly_id'=>1, 'password'=>'123']);
        User::create(['name'=>'Makra Zsófia', 'email'=>'makrazsofia@gmail.com', 'osztaly_id'=>3, 'password'=>'123']);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
