<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class pizzaController extends Controller
{
    public function index()
    {
        //$pizzas=Pizza::where('type','hawaiian')->get();
        $pizzas=Pizza::latest()->get();
        
     
    
    return view('pizzas',[
        'pizzas'=>$pizzas]



);
     }
    public function show($id)
    {
        $pizza=Pizza::find($id);
        return view('pizzas.show',['pizza'=>$pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }
    public function store()
    {
       $pizza=new Pizza();
       $pizza->name=request('name');
       $pizza->type=request('type');
       $pizza->base=request('base');
       $pizza->toppings=request('toppings');

       $pizza->save();
        return redirect('/')->with('mssg','Thanks for Order');
    }
    // public function next()
    // {
    //     return view('pizzas.create');
        
    // }

public function destroy()
{
    $pizza=Pizza::findOrFail($id);
    $pizza->delete();
    return redirect('/pizzas');
}




}
