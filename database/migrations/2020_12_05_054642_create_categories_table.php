<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('categories', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->bigIncrements('id');
            $table->bigInteger('parent_id')->default(0);
            $table->string('slug', 100)->unique()->index();
            $table->string('name', 100);
            $table->string('desc', 255);
            $table->integer('priority')->unsigned()->default(0);
            $table->boolean('is_public')->default(0)->index();

            // $table->foreign('parent')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
