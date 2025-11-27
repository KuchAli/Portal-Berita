<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('comments', function (Blueprint $table) {
    $table->id();
    $table->foreignId('article_id')->constrained()->onDelete('cascade');
    $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
    $table->string('name')->nullable();
    $table->string('email')->nullable();
    $table->text('body');
    $table->enum('status', ['pending','approved','spam'])->default('pending');
    $table->timestamps();
    });
    }


    public function down()
    {
    Schema::dropIfExists('comments');
    }
};
