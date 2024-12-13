<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->integer('estoque')->default(0); // Campo estoque com valor padrão 0
        });
    }
    
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('estoque');
        });
    }
};

