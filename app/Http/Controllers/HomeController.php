<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller{
  public function index(){
    $img = Image::make(public_path('img/bg.jpg'))->resize(500, 500);
    return $img->response('jpg');
  }
}
?>
