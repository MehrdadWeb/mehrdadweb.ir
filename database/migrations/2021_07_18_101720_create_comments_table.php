<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id'); /* کامنت برای کدام مطلب است؟ */
            $table->text('body'); //متن نظر
            $table->string('name'); //نام نویسنده ی نظر
            $table->string('email'); // ایمیل نویسنده ی نظر
            $table->tinyInteger('status')->default(0); /*پس هر نظری ثبت شد نمایش داده نشود ، 0 منتشر نشود  */
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
        Schema::dropIfExists('comments');
    }
}
