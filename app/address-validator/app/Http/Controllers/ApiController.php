<?php

namespace App\Http\Controllers;

use App\Validator\ValidatorInterface;
use http\Env\Response;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class ApiController extends BaseController
{

  public function validateAddress(Request $request, ValidatorInterface $validator)
  {
    return response(['valid' => $validator->validate((int)$request->input('id'))], 200);
  }

  public function errorResponse(Request $request)
  {
    return response(['error' => 'Specified request does not correspond to the server requirements.'], 404);
  }
}
