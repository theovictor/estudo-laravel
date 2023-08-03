<?php namespace App\Modules\User;

use App\Moduels\_mainController\Controller;
use App\Modules\User\userValidate\createUserValidate;
use App\Modules\User\userValidate\updateUserValidate;
use App\Modules\User\UserService;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller {

  public function __construct(private UserService $userService) {
    $this->userService = $userService;
  }

  public function create(createUserValidate $req) {
    $data = $req->validated();
    $user = $this->userService->create($data);
    return response()->json($user, 201);
  }

  public function findById(int $id) {
    $user = $this->userService->findById($id);
    return response()->json($user, 200);
  }

  public function update(updateUserValidate $req, int $id) {
    try {
      $data = $req->validated();
      $user = $this->userService->update($id, $data);
      return response()->json($user, 200);
    } catch (Exception $e) {
      if($e instanceof ModelNotFoundException) {
        return response()->json([
          'status' => 404,
          'message' =>'Error to update user.'
        ], 404);
      }
    }
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
