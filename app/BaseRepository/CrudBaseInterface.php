<?php

namespace App\BaseRepository;

interface CrudBaseInterface {
  public function create(array $data);
  public function findById(int $id);
  public function update(int $id, array $data);
  public function delete(int $id);
}
