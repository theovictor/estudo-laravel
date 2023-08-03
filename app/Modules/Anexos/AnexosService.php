<?php namespace App\Modules\Anexos;

class AnexosService {
  public function __construct(private AnexosRepository $anxRepo){
    $this->anxRepo = $anxRepo;
  }

  public function upload($file) {

  }

  public function download($file) {

  }
}
