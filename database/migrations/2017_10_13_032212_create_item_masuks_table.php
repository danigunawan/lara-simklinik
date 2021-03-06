<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_masuks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_faktur');
            $table->string('keterangan');
            $table->float('total',11,2)->default(0.00);
            $table->unsignedInteger('created_by')->nullable()->index();            
            $table->unsignedInteger('updated_by')->nullable()->index();
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
        Schema::dropIfExists('item_masuks');
    }
}
