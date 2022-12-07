<?php

use App\Models\Game;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('battles', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->foreignIdFor(Game::class);

            $table->unique(['name', 'game_id']);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('battles');
    }
};