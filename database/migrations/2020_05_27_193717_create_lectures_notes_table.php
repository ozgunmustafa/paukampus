<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures_notes', function (Blueprint $table) {
            $table->unsignedBigInteger('lecture_id');
            $table->unsignedBigInteger('note_id');

            $table->primary(['lecture_id', 'note_id']);

            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('no action');
            $table->foreign('note_id')->references('id')->on('notes')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures_notes');
    }
}
