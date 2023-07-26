<?php

namespace App\Repositories;
use App\Models\User;

class UserRepository implements UserInterface {

  public function create(array $data) {
    return User::create($data);
  }

  public function findOne(int $id) {
    return User::find($id);
  }

  public function update(int $id, array $data){
    $user = User::findOrFail($id);
    $user->update($data);
    return $user;
  }

  public function delete(int $id) {
    return User::destroy($id);
  }

  public function findByEmail(string $email) {
    return User::where('email', $email)->first();
  }

  public function findAll() {
    return User::find();
  }
}
