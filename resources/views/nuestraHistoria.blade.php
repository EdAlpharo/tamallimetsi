@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/historia.css')?>" type="text/css">

<div class="container">
    <br>
    <h1 style="text-align: center">Nuestra historia</h1>
    <br>
</div>


<div class="card mb-7" style="width:auto">
  <img src="{{ asset('img/tamales.jpg')}}"class="rounded-start" alt="..." style="height: 500px">
  <div class="card-body container">
    <h3 class="card-title">Acerca de los tamales</h3>
    <p class="card-text">El tamal es un platillo emblemático de la gastronomía mexicana, el cual se encuentra elaborado con masa de maíz rellena de carne ya sea de pollo, cerdo e incluso res y en algunas ocasiones mariscos acompañados por una salsa de jitomate, tomate o mole en algunas ocasiones y son cocinados al vapor envueltos en hojas de mazorca de maíz u hojas de plátano.</p>
  </div>
</div>

<br>
<div class="row justify-content-center container-fluid">
<div class="card mb-4" style="max-width: 1500px;">
  <div class="row g-3">
    <div class="col-md-4">
      <img src="{{ asset('img/tamales2.jpg')}}"class="img-fluid rounded-start" alt="..." style="width:heigth:500px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <h3 class="card-title">Nuestros inicios</h3>
        <p class="card-text">Este proyecto productivo surgió a mediados del año 2014 como iniciativa de los beneficiarios de El Puente de Esperanza con el objetivo de obtener fondos para la institución; se eligieron los tamales por ser un platillo típico, los cuales podemos encontrar en casi todas las regiones de nuestro país donde se consumen para celebrar algunas de las festividades más importantes del año como Navidad, Reyes, El dia de la Candelaria y sobre todo El dia de muertos e incluso pueden llegar a ser parte de la dieta diaria de la gran mayoría de los mexicanos usualmente acompañados de bebidas tradicionales como café chocolate, atole o champurrado.</p>
    </div>
    </div>
  </div>
</div>
</div>
<br>
<div class="row justify-content-center container-fluid">
<div class="card mb-4" style="max-width: 1500px;">
  <div class="row g-3">
    <div class="col-md-8">
      <div class="card-body">
        <p class="card-text">Dentro de la gran variedad de tamales que existen en la región los jóvenes de El puente de Esperanza optaron por elaborar tamales de origen veracruzano gracias a la influencia de una persona cercana a la institución que fué quien proporcionó la receta para tan delicioso platillo.</p>
    </div>
    </div>
    <div class="col-md-4">
      <img src="{{ asset('img/tamal-veracruzano.jpeg')}}"class="img-fluid rounded-start" alt="..." style="width: 500px">
    </div>
  </div>
</div>
</div>
<br>
<div class="row justify-content-center container-fluid">
<div class="card mb-4" style="max-width: 1500px;">
  <div class="row g-3">
    <div class="col-md-4">
      <img src="{{ asset('img/logo-2.png')}}"class="img-fluid rounded-start" alt="..." style="width:300px">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <h3 class="card-title">Nuestra marca</h3>
        <p class="card-text">La marca de Tamalli Metsi surgió debido a la necesidad de identidad del producto cuyo significado engloba a dos culturas como los son el náhuatl del cual proviene el vocablo “Tamalli” que suele significarse envuelto y se empleaba para hacer referencia a los tamales, por otro lado y haciendo alusión a la cultura de una parte de los beneficiarios de la institución pertenecientes a los Otomíes de la zona norte del estado de querétaro se adoptó el vocablo “mesti” que se puede traducir como joven conjuntado en el nombre de la marca cuyo significado puede entenderse como “Tamal joven” aludiendo a quienes elaboran este producto.  </p>
    </div>
    </div>
  </div>
</div>
</div>


@stop
