<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemIconTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('item_icon', function (Blueprint $table) {
            $table->timestamps();
            $table->softDeletes();
            $table->decimal('code', 13, 0);
            $table->bigInteger('icon_id');
            $table->integer('priority')->default(0)->unsigned()->index();

            $table->primary(['code', 'icon_id']);

            $table->foreign('code')
                ->references('code')
                ->on('items')
                ->onDelete('cascade');

            $table->foreign('icon_id')
                ->references('id')
                ->on('icons')
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
        Schema::dropIfExists('item_icon');
    }
}
