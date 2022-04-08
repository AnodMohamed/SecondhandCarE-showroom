<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('brand')->nullable();
            $table->string('model')->nullable();

            $table->string('exterior_color')->nullable();
            $table->string('car_condition')->nullable();
            $table->string('warranty_date')->nullable();

            $table->string('kilometere_driven')->nullable();
            $table->string('regional_space')->nullable();
            $table->string('accident_history')->nullable();

            $table->string('body_style')->nullable();
            $table->string('number_of_doors')->nullable();
            $table->string('fuel_type')->nullable();

            $table->string('engine_CC')->nullable();
            $table->string('nunber_of_cylinders')->nullable();
            $table->string('transmission')->nullable();

            $table->string('drive_type')->nullable();
            $table->string('features')->nullable();
            $table->string('body_number')->nullable();

            $table->string('year_of_ownership')->nullable();
            $table->string('file')->nullable();
            $table->integer('price');
            $table->string('note')->nullable();

            $table->string('image')->nullable();
            $table->string('images')->nullable();

            $table->string('status')->default('Inactive');
            $table->bigInteger('admin_responsible')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
