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
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('annotation');
            $table->datetime('begin');/*начало представления*/
            $table->date('date');/*дата представления*/
            $table->integer('duration');/*строка потому что мы ничего не успеваем- строка длительности перфоманса*/ 
            $table->integer('price'); 
            $table->string('image_small');
            $table->string('image_big');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('performances');
    }
};
