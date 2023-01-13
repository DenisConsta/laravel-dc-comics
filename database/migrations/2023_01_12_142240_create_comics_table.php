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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 75);
            $table->string('slug', 80)->unique();
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->float('price', 5, 2, true);
            $table->string('series', 50)->nullable();
            $table->date('sale_date', 75)->nullable();
            $table->string('type', 50)->nullable();
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
        Schema::dropIfExists('comics');
    }
};
