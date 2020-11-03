@extends('layouts.layout')
@section('content')
 <div class="wrapper pizza-details">
 <h1>Order for {{$pizza->name}} </h1>
 <p class="type">Type-{{$pizza->type}}</p>
 <p class="base">Base-{{$pizza->base}}</p>
 <p class="toppings">Extra toppings:</p>
 <ul>
 @foreach($pizza->toppings as $toppings)
 <li>{{$toppings}}</li>
 </ul>
 </div>
 <a href="/pizzas" class="back"><----Back to Pizzas</a>
 <form action="/pizzas/{{$pizza->id}}" method="post">
 @csrf
 @method('Delete')
 <button> Complete order</button>
 @endsection
