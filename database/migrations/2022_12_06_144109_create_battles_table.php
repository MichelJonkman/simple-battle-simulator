<?php

use App\Models\Battle;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('battles', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignIdFor(Battle::class);

            $table->unique(['name', 'battle_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('battles');
    }
};