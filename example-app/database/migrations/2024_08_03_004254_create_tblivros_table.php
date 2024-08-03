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
        Schema::create('tblivros', function (Blueprint $table) {
            $table->id("codigo");
            $table->string("nomelivro",30); //nomelivro varchar(30)
            $table->string("generolivro",10);// generlivro varchar(10)
            $table->date("anolivro");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tblivros');
    }
};
