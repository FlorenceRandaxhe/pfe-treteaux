<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Query\Expression;


class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('intro');
            $table->string('img');
            $table->string('alt');
            $table->text('description');
            $table->json('prices')->nullable();
            $table->json('seats')->nullable();
            $table->json('distribution');
            $table->json('details');
            $table->json('gallery');
            $table->json('press');
            $table->boolean('featured')->default(false);
            $table->boolean('resto')->default(false);
            $table->boolean('seating')->default(true);
            $table->timestamp('date');
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('season_id')->references('id')->on('seasons')->onDelete('cascade');
            $table->foreignId('type_id')->references('id')->on('types')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
