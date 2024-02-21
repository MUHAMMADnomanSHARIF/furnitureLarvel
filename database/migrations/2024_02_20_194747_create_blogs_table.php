<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->longText('description');
                $table->string('second_title')->nullable();
                $table->longText('second_description')->nullable();
                $table->string('third_title')->nullable();
                $table->longText('third_description')->nullable();
                $table->string('forth_title')->nullable();
                $table->longText('forth_description')->nullable();
                $table->string('fifth_title')->nullable();
                $table->longText('fifth_description')->nullable();
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
};
