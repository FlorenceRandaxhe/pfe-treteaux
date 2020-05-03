<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->text('description');
            $table->text('distribution')->nullable();
            $table->text('info')->nullabel();
            $table->timestamp('date');
            $table->json('details');
            $table->json('gallery')->nullable();
            $table->json('press')->nullable();
            $table->boolean('featured')->default(false);
            $table->boolean('resto')->default(false);
            $table->foreignId('type_id')->constrained()->onDelete('cascade');
            $table->foreignId('season_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('events');
    }
}
