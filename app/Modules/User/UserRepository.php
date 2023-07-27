<?php

namespace App\Modules\User;

use App\BaseRepository\RepositoryBase;
use App\Modules\User\UserModel;

class UserRepository extends RepositoryBase implements UserInterface{

  public function __construct(UserModel $model) {
    parent::__construct($model);
  }

  public function create(array $data) {
    return $this->model->create();
  }

  // public function findOne(int $id) {
  //   return UserModel::find($id);
  // }

  // public function update(int $id, array $data){
  //   $user = UserModel::findOrFail($id);
  //   $user->update($data);
  //   return $user;
  // }

  // public function delete(int $id) {
  //   return UserModel::destroy($id);
  // }

  public function findByEmail(string $email) {
    return UserModel::where('email', $email)->first();
  }

  public function findAll() {
    return UserModel::find();
  }
}
