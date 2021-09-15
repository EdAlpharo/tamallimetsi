@extends('layouts.base')

@section('vistaBase')
<link rel="stylesheet" href="<?php echo asset('css/social.css') ?>" type="text/css">
<br>

<div class="card bg-dark text-black">
    <img src="{{ asset('img/graduados.png')}}" class="card-img" alt="...">
    <div class="card-img-overlay">
        <h5 class="card-title">Esquema social</h5>
    </div>
</div>
<br>
<div class="container-fluid">
    <div id="content">
        <div id="left">
            <div id="object1" style="width: 50%; float:left">
            <div class="container-fluid">
            <h1>Logros de nuestro proyecto</h1>
            <br>
            <li>54 graduados de secundaria y preparatoria</li>
            <li> 13 graduados de carrera profesional.</li>
            <li>25 graduados de carrera técnica.</li>
            <li>116 capacitados en el seminario de paternidad.</li>
            <li>443 participantes en nuestro seminario de adicciones.</li>
            <li>1,247 niños participantes del curso de verano.</li>
            <li>13 familias reintegradas después de nuestro programa de ayuda.</li>
            <li>9 casas y 3 centros de costura construidos.</li>   
            </div>    
        </div>
            <div id="object2" style="width: 50%; float:right">
            <div class="container-fluid">
            <h1>Beneficios sociales derivados de Tamalli Metsi</h1>
            <br>
            <p style="text-align:justify">
            Tamalli Metsi es un proyecto productivo estructurado bajo los conceptos de un modelo sustentable. El modelo consta de una fábrica de capacidad comercial de tamales veracruzanos, donde el 100% de los ingresos son utilizados para apoyar con la manutención a los jóvenes estudiantes de procedencia indígena dentro de nuestra organización (El Puente de Esperanza IAP). Por lo que cada tamal que es vendido aporta recursos que son aplicados directamente en las acciones de apoyo a los jóvenes.
            </p>
            <p style="text-align:justify">
            El proyecto inició como un esfuerzo surgido por la necesidad e iniciativa propia de nuestra organización. Ha sido apoyado por Fundación Merced Querétaro y El Municipio de Querétaro, mediante los cuales obtuvimos los recursos para la profesionalización del proyecto, desarrollo de marca, inocuidad, equipamiento y compra de insumos. Contamos con aliados como Mini-Green AC y Mostaza con los que buscamos potenciar y escalar el proyecto.
            </p>  
            </div> 
            </div>
        </div>

    </div>
</div>
<br>

@endsection