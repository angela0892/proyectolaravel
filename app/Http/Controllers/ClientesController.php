<?php

namespace App\Http\Controllers;
use App\Models\Customer;

use Illuminate\Http\Request;
use DB;

class ClientesController extends Controller
{
    function listado_clientes() {
        $listado = DB::table('customers')->get();
        return view('clientes', compact('listado'));
    }

    function registrar(){
        return view('clientes-registrar');
    }

    function guardar(){
        DB::table('customers')->insert([
            'customerName' => $_POST['contactFirstName'],
            'contactFirstName' => $_POST['contactFirstName'],
            'contactLastName' => $_POST['contactLastName'],
            'phone' => $_POST['phone'],
            'addressLine1' => $_POST['addressLine1'],
            'city' => 'Lima',
            'country' => 'Peru',
        ]);
        return redirect()->route('clientes');
    }

}
