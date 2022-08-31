@extends('layouts.principal')
@if("h2")
<link href="http://fonts.cdnfonts.com/css/copperplate" rel="stylesheet">
@endif
@section('content')

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    
  <div class="carousel-inner">
    <h2 >Pizzaria Santa Rita</h2>
    <div class="carousel-item active">
      <img class="d-block w-100 h-75" src="img/foto-p.png" alt="First slide">
    </div>
    <div class="carousel-item">
    
      <img class="d-block w-100 h-75" src="img/pizza.png" alt="Second slide">
    </div>
    <div class="carousel-item">
    
      <img class="d-block w-100 " src="img/pizza2.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
   <h2 id = "cardapio">Cardápio<h2>

  <div class = "container painel">
     <img src = "img/cardapio.jpg" alt= "cardápio" class = "crd">
  </div>



@stop