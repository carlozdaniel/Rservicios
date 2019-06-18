@extends('layouts.l_navbar_principal')

@section('content')

  <title>Principal</title>
  <style>

  .sombra:hover{
    transition:1s;
  -webkit-box-shadow: 2px 3px 54px -13px rgba(0,0,0,0.75);
  -moz-box-shadow: 2px 3px 54px -13px rgba(0,0,0,0.75);
   box-shadow: 2px 3px 54px -13px rgba(0,0,0,0.75);   
  }
  body{
    background:#EDF0F0  ;
  }
  </style>
<br>
<div class="container">
<div class="row offset-1">

<div  class="card sombra" style="width: 14rem; margin:6px;">
<img   style="width: 222px; height:250px;" src="../img/p.jpg" class="card-img-top" >
<div class="card-body">
  <h5 class="card-title"> Grupo Marranos</h5>
  <p class="card-text"><strong>Descripción:</strong>Some quick exampard.</p>
</div>
</div>

<div class="card sombra" style="width: 14rem; margin:6px;">
<img style="width: 222px; height:250px;" src="../img/img (1).jpg" class="card-img-top" >
<div class="card-body">
  <h5 class="card-title"> El Tucan</h5>
  <p class="card-text"><strong>Descripción:</strong> Some quick exampard.</p>
</div>
</div>
</div>

@endsection
