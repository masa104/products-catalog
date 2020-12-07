<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('features', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->bigIncrements('id');
            $table->integer('item_id')->length(13)->index();
            $table->string('heading', 100);
            $table->string('content', 500);
            $table->integer('priority')->unsigned()->default(0);
            $table->boolean('is_public')->default(0)->index();

            $table->foreign('item_id')
                ->references('id')
                ->on('items')
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
        Schema::dropIfExists('features');
    }
}
