@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/pedido.css') ?>" type="text/css">



<br>
<br>
<div>
    <div class="container-xxl">
    <form class="row g-3">
        <h2>Datos del contacto</h2>
  <div class="col-md-6">
    <label for="inputName4">Nombre</label>
    <input type="text" class="form-control" id="nombre">
  </div>
  <div class="col-md-6">
    <label for="inputPhone">Telefono</label>
    <input type="text" class="form-control" id="Telefono">
  </div>

  <div class="col-md-6">
    <label for="inputAddress" >Dirección</label>
    <input type="text" class="form-control" id="Direccion">
  </div>

  <div class="col-md-6">
    <label for="inputEmail" >Correo electronico</label>
    <input type="mail" class="form-control" id="Email">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" >Tamales Verdes</label>
    <input type="number" class="form-control" id="Verdes">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" >Tamales Rojos</label>
    <input type="number" class="form-control" id="Rojos">
  </div>
  <div class="col-md-6">
    <label for="inputEmail" >Paquetes empacados al vacio</label>
    <input type="number" class="form-control" id="Paquetes">
  </div>

  <div class="col-12">
    <button type="submit">Enviar pedido</button>
  </div>
  <p>*En un plazo de 24 horas habiles se le contactará via telefonica (WatssApp) para la confirmación del pedido asegurese de enviar correctamente su información</p>
</form>
</div>
</div>

<br>

@endsection
