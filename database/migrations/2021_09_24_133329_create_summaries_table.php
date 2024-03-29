<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaries', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->string('name', 256);
            $table->string('middle_name', 256);
            $table->string('surname', 256);
            $table->string('email', 256);
            //$table->integer('position_id')->nullable();
            //$table->integer('level_id');
            $table->date('date');
            //$table->integer('status_id');
            $table->text('skills');
            $table->text('description');
            $table->text('experience');
            $table
                ->foreignId('position_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table
                ->foreignId('level_id')
                ->nullable()
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('restrict');
            $table
                ->foreignId('status_id')
                ->constrained('summary_statuses')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
        Schema::dropIfExists('summaries');
    }
}
