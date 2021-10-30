@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/index.css')?>" type="text/css">

<div class="dvgen">

<br>
<div class="caja">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<img class="img-fluid" src="{{ asset('img/inicio-4.png')}}" style="opacity:0.9">
</div>
<br>

<div class="cnt">
<br>
<div class="card container-fluid" style="width: 15rem;">
  <img src="{{ asset('img/logo-2.png')}}" class="card-img-top" alt="..." style="width:auto; height:auto">
  <div class="card-body">
    <p class="card-text" style="font-family: 'arial'; text-align:center;font-size: 18px;">"Tamales artesanales, elaborados con sazón y corazón."</p>
</div>
</div>
<br>
</div>
<br>

<div class="row justify-content-center">
<div class="card mb-4" style="max-width: 1200px;">
  <div class="row g-3">
    <div class="col-md-4">
      <img src="{{ asset('img/tamal.jpg')}}"class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Tamalli Metsi</h5>
        <p class="card-text">Es un proyecto productivo enfocado en apoyar a jóvenes estudiantes provenientes de la Sierra Gorda o de comunidades indígenas en Querétaro. Los tamales son elaborados mediante estrictos mecanismos de sanidad e inocuidad alimentaria, utilizando equipo gastronómico de primer nivel; pero con ingredientes y recetas traídas desde el corazón de México. </p>
      </div>
    </div>
  </div>
</div>
</div>

</div>




@stop
