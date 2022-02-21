<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            
            $table->id();
            $table->string('name');
            $table->string('user_id');
            $table->string('item_id');
            $table->string('standard_id');
            $table->string('state_id');
            $table->text('description')->nullable();
            $table->decimal('price', 6, 2);
            $table->timestamp('available_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('transmission')->default(0);
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
        Schema::dropIfExists('items');
    }
}
