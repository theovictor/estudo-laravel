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

// docker run \
// -p 9000:9000 \
// -p 9090:9090 \
// --name minio \
// -v "$(pwd)/minio/data:/data" \
// -e "MINIO_ROOT_USER=administrador" \
// -e "MINIO_ROOT_PASSWORD=development" \
// quay.io/minio/minio server /data --console-address ":9090"
