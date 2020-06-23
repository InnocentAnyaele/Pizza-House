@extends('layouts.app')

@section('content')   

<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($pizzas as $pizzas)
<div class="pizza-item">
  <img src="/img/pizza.png" alt="pizza icon">
 <h4><a href="/pizzas/{{ $pizzas -> id }}"> {{ $pizzas -> name }} </a></h4>
  </div>
@endforeach
</div>    
     

        @endsection('content')
