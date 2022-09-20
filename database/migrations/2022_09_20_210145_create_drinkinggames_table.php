<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('drinkinggames', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'creator');
            $table->string('name', 50);
            $table->enum('game', ['feeem']);
            $table->enum('status', ['waiting', 'running', 'ended']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('drinkinggames', function (Blueprint $table) {
            //
        });
    }
};
