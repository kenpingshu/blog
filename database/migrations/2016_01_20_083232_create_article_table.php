<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category')->index()->unsigned();
            $table->string("title",100);
            $table->text('content');
            $table->integer("user_id")->index()->unsigned();
            $table->timestamp("create_at")->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp("update_at")->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
            $table->tinyInteger('status')->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('article');
    }
}
