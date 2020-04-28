<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
  public function index() {
    $pizzas = [
      ['type' => 'Hawaiian', 'base' => 'Cheesy Crust'],
      ['type' => 'Volcano', 'base' => 'Garlic Crust'],
      ['type' => 'Veg Supreme', 'base' => 'Thin and crispy']
    ];
  
    return view('pizzas', [
      'pizzas' => $pizzas, 
      'name' => request('name'),
      'age' => request('age')
    ]);
  }

  public function show($id) {
    return view('details', [
      'id' => $id
    ]);
  }
}
