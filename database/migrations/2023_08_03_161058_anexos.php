<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

  public function up(): void {
    Schema::create('anexos', function (Blueprint $table) {
      $table->integer('id', true, false);
      $table->string('name_anexo');
      $table->string('filename');
      $table->string('path');
      $table->string('mimetype');
      $table->integer('user_id', false, true);
      $table->timestamps();
      $table->foreign('user_id')->references('id')->on('users');
    });

    // Schema::table('anexos', function (Blueprint $table) {
    //   $table->unsignedInteger('user_id');
    //   $table->foreign('user_id')->references('id')->on('users');
    // });
  }

  public function down(): void {
    Schema::dropIfExists('anexos');
  }
};
