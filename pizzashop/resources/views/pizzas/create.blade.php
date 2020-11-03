@extends('layouts.layout')
@section('content')
<div class="wrapper create-pizza">
<h1> Create a New pizza </h1>
<form action="/pizzas" method="post">
@csrf
<label for="name">Your name</label>
<input type="text" id="name" name="name">

<label for="type">Choose pizza Type</label>
<select name="type" id="type" >
<option value="margherita">Margherita</option>
<option value="hawaiian">Hawaiian</option>
<option value="veg supreme">Veg Supreme</option>
<option value="volcano">Volcano</option>
</select>

<label for="base">Choose pizza Base</label>
<select name="base" id="base" >
<option value="cheesy crust">Cheesy Crust</option>
<option value="garlic crust">Garlic Crust</option>
<option value="thin and crispy">Thin & Crispy</option>
<option value="thick">Thick</option>
</select>

<fieldset>
<label> Extra Toppings:</label>
<input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br/>
<input type="checkbox" name="toppings[]" value="pepper">Pepper<br/>
<input type="checkbox" name="toppings[]" value="garlic">Garlic<br/>
<input type="checkbox" name="toppings[]" value="olives">Olives<br/>
</fieldset> 

<input type="submit" value="Order Pizza"/>
</form>


@endsection