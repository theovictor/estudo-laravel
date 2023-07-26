<?php

namespace App\Modules\User;

use App\Modules\User\UserModel;

class UserRepository implements UserInterface {

  public function create(array $data) {
    return UserModel::create($data);
  }

  public function findOne(int $id) {
    return UserModel::find($id);
  }

  public function update(int $id, array $data){
    $user = UserModel::findOrFail($id);
    $user->update($data);
    return $user;
  }

  public function delete(int $id) {
    return UserModel::destroy($id);
  }

  public function findByEmail(string $email) {
    return UserModel::where('email', $email)->first();
  }

  public function findAll() {
    return UserModel::find();
  }
}
