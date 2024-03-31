<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCataloguesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('catalogues', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('package_id')->index();
            $table->string('name');
            $table->longText('description');
            $table->string('for');
            $table->string('language');
            $table->string('color');
            $table->string('catalogue_link');
            $table->integer('discount')->nullable();
            $table->string('responsive_switch')->nullable();
            $table->string('label');
            $table->string('desktop_image');
            $table->string('tablet_image');
            $table->string('mobile_image');
            $table->timestamps();
            $table->foreign('package_id')->references('id')->on('packages')->onUpdate('cascade')->onDelete('cascade');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('catalogues');
    }
}
