@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/nosotros.css') ?>" type="text/css">

<div class="dvgen">


<div class="container">
    <br>
    <h1 style="text-align:center">Nuestro Producto</h1>
    <br>
    <div class="container-fluid">
        <p style="font-size:25px; text-align:justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea odio, aliquam dolorem consequatur vero non beatae, consequuntur nemo corporis optio similique sint id sit, deserunt enim saepe? Deleniti, similique consequatur.
        </p>
        <p style="font-size:25px; text-align:justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea odio, aliquam dolorem consequatur vero non beatae, consequuntur nemo corporis optio similique sint id sit, deserunt enim saepe? Deleniti, similique consequatur.
        </p>
        <p style="font-size:25px; text-align:justify">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea odio, aliquam dolorem consequatur vero non beatae, consequuntur nemo corporis optio similique sint id sit, deserunt enim saepe? Deleniti, similique consequatur.
        </p>
    </div>
    <br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
    <div class="card h-100">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tamal Salsa roja</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <li class="list-group-item">Precio $20.00</li>
      <div class="card-footer">
      <a href="#" class="btn btn-primary">Realizar pedido</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tamal Salsa Verde</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <li class="list-group-item">Precio $20.00</li>
      <div class="card-footer">
      <a href="#" class="btn btn-primary">Realizar pedido</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Paquete con 4 tamales</h5>
        <p class="card-text"> below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <li class="list-group-item">Precio $82.00</li>
      <div class="card-footer">
      <a href="#" class="btn btn-primary">Realizar pedido</a>
      </div>
    </div>
  </div>
</div>
    <br>
</div>
<div class="container-fluid">
<p>
  *Los tamales son elaborados los días Jueves por lo que la recolección sería los días viernes y sabados para una mayor frescura de su Producto.
</p>
<p>
*Se requiere que el pedido se haga antes del día martes para contemplarlo en la producción de esa semana y entregarle el dia viernes.
</p>
<p>
*En caso de que su pedido supere las 50 unidades y se requiera en una fecha especifica nos pondremos en contacto con usted.
</p>
</div>
</div>

@stop
