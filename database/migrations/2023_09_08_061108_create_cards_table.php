<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('card_no')->nullable()->length(200);
            $table->integer('user_id')->default(0);
            $table->integer('scheme_id')->default(0);
            $table->string('card_type')->nullable()->length(50);
            $table->string('cvv')->nullable()->length(10);
            $table->string('date_expiry')->nullable()->length(10);
            $table->string('image')->nullable()->length(100);   
            $table->boolean('is_financial')->default(1);
            $table->boolean('is_active')->default(1);
            $table->boolean('is_delete')->default(0);
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
        Schema::dropIfExists('cards');
    }
}
