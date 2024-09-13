<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();   //  ID of the task
            $table->string('title');    //  Title of the task
            $table->text('description')->nullable();    //  Description of the task
            $table->boolean('done')->default(false);    //  Status of the task (done or not)
            $table->timestamps();   //  Created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('todos');
    }
};
