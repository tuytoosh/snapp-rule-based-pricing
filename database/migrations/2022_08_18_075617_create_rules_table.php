<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rules', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('type', ["DISCOUNT", "MARKUP"]);
            $table->unsignedBigInteger('condition_id');
            $table->foreign('condition_id')
                ->references('id')
                ->on('conditions')
                ->onDelete('cascade');


            $table->unsignedBigInteger('action_id');
            $table->foreign('action_id')
                ->references('id')
                ->on('actions')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rules');
    }
};
