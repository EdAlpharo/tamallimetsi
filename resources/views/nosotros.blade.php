@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/nosotros.css') ?>" type="text/css">
<br>

<div class="contenedor-n1">
  <div class="container">
    <div class="card mb-4" style="max-width: 25rem;">
      <img src="{{ asset('img/epe-logo.png')}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">El Puente de Esparaza I.A.P</h5>
        <p class="card-text">Somos una organización sin fines lucrativos que apoya a jóvenes talentos de la Sierra Gorda y de comunidades indígenas en Querétaro. Les brindamos manutención, asesoría y los apoyamos a conseguir becas para que puedan cursar estudios técnicos y profesionales en la ciudad de Querétaro.</p>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid">
  <div id="content">
    <div id="left">
      <div id="object1" style="width:70%; float:left">
        <div class="container-fluid">
          <div class="card mb-4" style="max-width: 1100px;">
            <div class="row g-1">
              <div class="col-md-4">
                <img src="{{ asset('img/Logo.png')}}" class="img-fluid rounded-start" alt="..." style="max-width: auto">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">El Proyecto</h5>
                  <p class="card-text txt1">El proyecto de Tamalli Metsi inició con la necesidad que tenemos como organización de generar recursos que nos permitan seguir realizando nuestros objetivos incluidos en nuestra misión. Las necesidades cada vez son mayores, los insumos cada vez son más caros, y cada vez hay más jóvenes interesados en nuestro programa. Es por ello que decidimos iniciar éste proyecto con la misión de generar una fuente alterna de recursos que no dependa de donativos, rifas o bazares.</p>
                  <p class="card-text txt1">Elegimos a los tamales ya que son un producto emblemático y representativo de las culturas prehispánicas, por lo que sabíamos que facilitaría el que los jóvenes se identificaran con ellos y así pudieran apropiarse del proyecto.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="object2" style="width: 30%; float:right">
        <div class="container-fluid">
          <div class="card" style="width:auto;">
          <img src="{{ asset('img/tamales-proceso.png')}}" class="img-fluid rounded-start" style="max-width: auto;">
          </div>
        </div>
      </div>
    </div>

  </div>
</div>
<br>



@endsection