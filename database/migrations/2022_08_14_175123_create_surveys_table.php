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
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('age');
            $table->enum('gender', ['m', 'w', 'o']);
            $table->float('t_facebook', 4, 2);
            $table->float('t_whatsapp', 4, 2);
            $table->float('t_twitter', 4, 2);
            $table->float('t_instagram', 4, 2);
            $table->float('t_tiktok', 4, 2);
            $table->foreignId('most_beloved_rrss')->constrained('social_networks');
            $table->foreignId('least_favorite_rrss')->constrained('social_networks');
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
        Schema::dropIfExists('surveys');
    }
};
