<?php

namespace App\BaseRepository;

use Illuminate\Database\Eloquent\Model;

class RepositoryBase implements CrudBaseInterface {
  protected $model;

  public function __construct(Model $model) {
    $this->model = $model;
  }

  public function create(array $data) {
    dd($data);
    return $this->model->create($data);
  }

  public function findById(int $id) {
    // return UserModel::find($id);
  }

  public function update(int $id, array $data){
    // $user = UserModel::findOrFail($id);
    // $user->update($data);
    // return $user;
  }

  public function delete(int $id) {
    // return UserModel::destroy($id);
  }
}
