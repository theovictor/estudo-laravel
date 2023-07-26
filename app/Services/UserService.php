<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService {
  private $userRepo;
  public function __construct(UserRepository $userRepo){
    $this->userRepo = $userRepo;
  }

  public function create(array $data) {
    return $this->userRepo->create($data);
  }

  public function findOne(int $id) {
    return $this->userRepo->findOne($id);
  }

  public function update(int $id, array $data) {
    return $this->userRepo->update($id, $data);
  }

  public function delete(int $id) {
    return $this->userRepo->delete($id);
  }

  public function findByEmail(string $email){
    return $this->userRepo->findByEmail($email);
  }

  public function findAll(string $find) {
    return $this->userRepo->findAll();
  }
}
