<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->smallIncrements('id')->nullable();
            $table->string('first_name',50)->nullable();
            $table->string('last_name',50)->nullable();
            $table->date('dob')->nullable();
            $table->string('height',10)->nullable();
            $table->string('weight',10)->nullable();
            $table->string('occupation',50)->nullable();
            $table->string('father_name',50)->nullable();
            $table->string('father_occupation',50)->nullable();
            $table->string('mother_name',50)->nullable();
            $table->string('mother_occupation',50)->nullable();
            $table->string('siblings',100)->nullable();
            $table->string('mob_no',50)->nullable();
            $table->string('tel_no',50)->nullable();
            $table->string('email_address',100)->nullable();
            $table->text('education')->nullable();
            $table->text('address')->nullable();
            $table->string('photo',100)->nullable();
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
        Schema::dropIfExists('biodatas');
    }
}
