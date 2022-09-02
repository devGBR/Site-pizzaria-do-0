@extends('layouts.principal')
@if("h2")
<link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
@endif
@section('content')

 <div class=" painel3">
        
        @foreach ($sabores as $s )
        <table class="table table-bordered">
        <div class="row mb-2">
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250 posit">
            <div class="card-body d-flex flex-column align-items-start ">
              <strong class="d-inline-block mb-2 text-primary">Pizza</strong>
              <h3 class="mb-0">
                <a class="text-dark" href="#">{{$s->nome}}</a>
              </h3>
              <p class="card-text mb-auto">{{$s->descricao}}</p>
              <a href="#">Pedir</a>
                </div>
              </div>
            </div>
          </div>
         @endforeach
         <div class = "d-flex flex-column align-items-start card flex-md-row mb-4 shadow-sm h-md-250 row mb-2 col-md-6 painel1">
         <li>
         <figcaption><h2> M/ Água na boca, M/ Frango com catupiry:</h2></figcaption>
         <a href="#"> <img class = "img" src="img/pizza.png" alt="Card image cap"> </a>
         </li>
         
         <li>
         <figcaption><h2> Lombinho: </h2></figcaption>
          <a href="#"> <img class = "img" src="img/cardapiop2.jpg" alt="Card image cap"> </a>
           
         </li>
         </div>
         
</div>

@stop