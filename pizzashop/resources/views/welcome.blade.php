@extends('layouts.layout')
@section('content')
        <div class="flex-center position-ref full-height">
           
            <div class="content">
            <img src="/images/pizzahouse.jpg" alt="pizza house logo" height=300px width=50%>

                <div class="title m-b-md">
                    Pizza House <br/>
                    The South's Best Pizza
                  

                </div>
                <p class="mssg">{{session('mssg')}}</p>
                <a href="http://127.0.0.1:8000/pizzas/create"> order pizza</a>
                <!-- <input type="button" value="Order pizza"> -->
              
                
            </div>

            
        </div>
        @endsection
   