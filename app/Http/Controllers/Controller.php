<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
  use HasFactory;
  public function index()
  {
      return view("Home", [ //sesuai nama file
          "title" => "Home",
          "pageTitle" => "Home"
      ]);
  }
}
