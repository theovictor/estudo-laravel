<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller{
  private $userService;
  public function __construct(UserService $userService) {
    $this->userService = $userService;
  }

  public function create(Request $req) {
    $data = $req->all();
    $user = $this->userService->create($data);

    return response()->json($user, 201);
  }

  public function findOne(int $id) {
    $user = $this->userService->findOne($id);

    return response()->json($user, 200);
  }

  public function update(Request $req, int $id) {
    $data = $req->all();
    $user = $this->userService->update($id, $data);

    return response()->json($user, 200);
  }

  public function delete(int $id) {
    $this->userService->delete($id);

    return response()->json(null, 204);
  }

  // public function findByEmail(string $email){

  // }

  // public function findAll(string $find) {

  // }
}
