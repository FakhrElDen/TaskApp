<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id')->index();
            $table->unsignedBigInteger('benefit_id')->index();
            $table->string('value');
            $table->timestamps();

            $table->foreign('package_id')->references('id')->on('packages')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('benefit_id')->references('id')->on('benefits')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plans');
    }
}
