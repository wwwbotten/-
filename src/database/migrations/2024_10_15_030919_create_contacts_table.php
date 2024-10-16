<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categry_id')->nullable()->constrained('categories');
            $table->string('first_name')->nullable()->change();
            $table->string('last_name')->nullable()->change();
            $table->tinyInteger('gender')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('tell')->nullable()->change();
            $table->string('address')->nullable()->change();
            $table->string('building');
            $table->text('detail')->nullable()->change();
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
        Schema::dropIfExists('contacts');
    }
}
