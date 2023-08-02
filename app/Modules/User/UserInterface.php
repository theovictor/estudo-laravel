<?php

namespace App\Modules\User;

interface UserInterface {
  public function findAll();
  public function findByEmail(string $email);
}
