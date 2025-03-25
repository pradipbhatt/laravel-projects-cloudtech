<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-increment primary key
            $table->string('name'); // Name field
            $table->string('email')->unique(); // Email field (unique)
            $table->integer('age'); // Age field
            $table->text('message'); // Message field
            $table->timestamps(); // created_at and updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
