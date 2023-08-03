<?php namespace App\Modules\Anexos;

class AnexosRepository implements AnexosInterface {
  public function __construct(private AnexosModel $model) {
    $this->model = $model;
  }

  public function upload($file) {

  }

  public function download($file) {

  }
}
