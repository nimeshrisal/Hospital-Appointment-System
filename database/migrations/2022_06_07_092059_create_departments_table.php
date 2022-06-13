<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->id('dept_id');
            $table->string('department_name',50)->unique();
            $table->string('description',200);
            $table->string('image',200);
            $table->bigInteger('department_no')->unique();
        });

        DB::insert('insert into departments values (?, ?,?,?,?)', [1, 'Administration','We maintain the whole system','https://online.alvernia.edu/wp-content/uploads/2019/02/How-to-Become-a-Hospital-Administration.png',101]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departments');
    }
};
