<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //نام  خدمات title
            $table->string('link');
            $table->string('tag'); //filter-app or filter-card or filter-web
            $table->text('description'); //body
            $table->tinyInteger('status')->default(1); /* 0 منتشر نشود  */
            $table->string('icon_class');
            $table->string('icon_bgcolor');
            $table->string('icon_color');
            $table->string('image');
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
        Schema::dropIfExists('services');
    }
}
