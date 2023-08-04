<?php namespace App\Modules\Anexos;

use Illuminate\Support\Facades\Storage;

class AnexosRepository implements AnexosInterface {
  public function __construct(private AnexosModel $model) {
    $this->model = $model;
  }

  public function upload($file) {
    return Storage::put('anexos', $file);
  }

  public function download($filename) {
    $path = 'caminho do arquivo no storage min io';
    return Storage::download($path, $filename);
  }
}
