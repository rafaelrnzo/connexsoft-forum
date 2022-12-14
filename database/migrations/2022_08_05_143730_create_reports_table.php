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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('user_id')->constrained();	
            $table->foreignId('answer_id')->constrained();	
            $table->foreignId('comment_id')->constrained();	
            $table->foreignId('question_id')->constrained();	
            $table->foreignId('report_category_id')->constrained();	
            $table->string('status');

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
        Schema::dropIfExists('reports');
    }
};