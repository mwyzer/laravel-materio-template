<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Refunds extends Controller
{
    //
  public function index()
  {
    return view('content.tables.tables-refunds');
  }
}
