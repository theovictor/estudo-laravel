<?php namespace App\Modules\Anexos;

use App\Moduels\_mainController\Controller;
use App\Modules\Anexos\anxValidate\anxValidate;
use Illuminate\Http\Request;

class AnexosController extends Controller {
  public function __construct(private AnexosService $anxService) {
    $this->anxService = $anxService;
  }

  public function upload(anxValidate $req) {
    return $this->anxService->upload($req);
  }

  public function download(Request $req) {
    return $this->anxService->download($req);
  }
}
