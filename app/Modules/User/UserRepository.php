<?php

namespace App\Modules\User;

use App\Modules\baseRepository\RepositoryBase;
use App\Modules\User\UserModel;

class UserRepository implements UserInterface {
  public function __construct(private UserModel $model, private RepositoryBase $base) {
    $this->model = $model;
    $this->base = $base;
  }

  public function create(array $data) {
    return $this->base->create($this->model, $data);
  }

  public function findById(int $id) {
    return $this->base->findById($this->model, $id);
  }

  public function update(int $id, array $data){
    return $this->base->update($this->model, $id, $data);
  }

  public function delete(int $id) {
    return $this->base->delete($this->model, $id);
  }

  public function findByEmail(string $email) {
    return UserModel::where('email', $email)->first();
  }

  public function findAll() {
    return UserModel::find();
  }
}
