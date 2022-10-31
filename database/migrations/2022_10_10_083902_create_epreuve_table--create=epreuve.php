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
    {     Schema::disableForeignKeyConstraints();
        
        Schema::create('epreuve', function (Blueprint $table) {
            $table->id();
            $table->date('dateepreuve');
            $table->string('lieu');

            $table->unsignedBigInteger('codeMat');
            $table->foreign('codeMat')
            ->references('id')
            ->on('matiere')
            ->onDelete('restrict')
            ->onUpdate('restrict');
           
        

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
