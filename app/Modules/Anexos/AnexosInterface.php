<?php namespace App\Modules\Anexos;

interface AnexosInterface {
  public function upload(array $file);
  public function download(string $file);
}
