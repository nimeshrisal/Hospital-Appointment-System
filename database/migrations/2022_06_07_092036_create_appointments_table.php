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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('problem',50);
            $table->integer('age');
            $table->string('gender',20);
            $table->string('contact',20);
            $table->string('email',50);
            $table->string('department_name',20)->nullable();
            $table->string('doctors_name',20)->nullable();
            $table->date('date',10)->nullable();
            $table->string('ref_no')->unique();
            $table->string('disease')->nullable();
            $table->string('medicine')->nullable();
            $table->date('next_visiting_date')->nullable();

    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
};
