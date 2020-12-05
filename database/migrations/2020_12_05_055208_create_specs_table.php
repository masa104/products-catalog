<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('specs', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->bigIncrements('id');
            $table->decimal('code', 13, 0)->index();
            $table->string('heading', 100);
            $table->string('content', 255);
            $table->integer('priority')->unsigned()->default(0);
            $table->boolean('is_public')->default(0)->index();

            $table->foreign('code')
                ->references('code')
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
        Schema::dropIfExists('specs');
    }
}
