<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
  public function index() {
    // $pizzas = Pizza::all();
    // $pizzas = Pizza::orderBy('name', 'desc')->get();
    // $pizzas = Pizza::where('type', 'Hawaiian')->get();
    $pizzas = Pizza::latest()->get();
  
    return view('pizzas.index', [
      'pizzas' => $pizzas
    ]);
  }

  public function show($id) {
    $pizza = Pizza::findOrFail($id);
    return view('pizzas.show', [
      'pizza' => $pizza
    ]);
  }

  public function create() {
    return view('pizzas.create');
  }

  public function store() {
    
    $pizza = new Pizza();

    $pizza->name = request('name');
    $pizza->type = request('type');
    $pizza->base = request('base');

    $pizza->save();

    return redirect('/')->with('mssg', 'Thanks for your order');
  }
}
