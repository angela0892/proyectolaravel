<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class EmpleadosController extends Controller
{
  function listado_empleados() {
    $listado = DB::table('employees')->get();
    return view('empleados', compact('listado'));
  }
}
