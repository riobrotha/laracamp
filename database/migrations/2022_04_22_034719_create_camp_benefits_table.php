<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampBenefitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            //1st method to relation another table
            //$table->bigInteger('camp_id')->unsigned();
            //$table->unsignedBigInteger('camp_id');


            //2nd method
            $table->foreignId('camp_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->timestamps();

            // 1st method
            //$table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camp_benefits');
    }
}
