<?php

namespace App\Modules\User;

interface UserInterface {
  public function create(array $data);
  public function findOne(int $id);
  public function update(int $id, array $data);
  public function delete(int $id);
  public function findAll();
  public function findByEmail(string $email);
}
