@extends('layouts.base')

@section('vistaBase')

<link rel="stylesheet" href="<?php echo asset('css/donate.css') ?>" type="text/css">

<div class="container" style="padding-top: 200px; padding-bottom: 100px">
    <section>
    <hr style="width:100%; height:1.5px">
    <p style="text-align:center">
  <a class="btn btn-primary btnMex" aria-expanded="false" aria-controls="" onclick="donaMex()" id="btnMex">Dona desde México</a>
  <a class="btn btn-primary btnUSA" aria-expanded="false" aria-controls="" onclick="donaUSA()" id="btnUSA">Donate from USA</a>
    </p>
    <div class="container" style="display:block; padding:30px" id="donaMex">
        <h4 style="text-align:center;">Donativos desde México</h4>
        <div  class="row" style="background-color: #3FA6DF">
            <h5 style="text-align: center; padding-top:15px">"El Puente de Esperanza I.A.P tiene la misión de Guiar y apoyar a jovenes para transformar sus vidas"</h5>
            <div class="col-md-3">
                <div class="d-grid gap-4">
                    <br>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showProgramaEducativo()">Programa Educativo</a>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showProgramaResidencial()">Programa Residencial</a>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showProgramaSalud()">Programa de Salud</a>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showHopeMaker()">HopeMaker</a>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showTamalliMetsi()">TamalliMetsi</a>
                    <a class="btn btn-primary" role="button" aria-expanded="false" aria-controls="" onclick="showProgramaCursoVerano()">Curso de verano</a>
                    <br><br><br>
                </div>
            </div>
            <div class="col-md-9">
                <div class="container" style="background-color:#37A6DE; color:white; display:block; padding:30px" id="programaEducativo">
                    <h4 style="text-align:center;">Programa Educativo</h4>
                    <p>
                        El Puente de Esperanza I.A.P apolla a jovenes de para que continuen con sus estudios de educación media y Superior para que sean capaces de desarrollar su potencial.
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
                <div class="container" style="background-color:#37A6DE; color:white; display:none; padding:30px " id="programaResidencial">
                    <h4 style="text-align:center;">Programa Residencial</h4>
                    <p>
                        Realizar soporte técnico de redes de datos para el correcto funcionamiento de la organización por medio de la verificación de fallas y de sus componentes. Diseñar redes de datos para establecer una comunicación efectiva de la información en la organización, mediante el análisis de requerimientos. Determinar los requerimientos funcionales y no funcionales del sistema informático, por medio de metodologías y prototipos de desarrollo para cubrir las necesidades del cliente.
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
                <div class="container" style="background-color:#37A6DE; color:white; display:none; padding:30px" id="programaNutricion">
                    <h4 style="text-align:center;">Programa de Salud</h4>
                    <p>
                        Desarrollar las soluciones (arquitectura) para satisfacer los requerimientos del cliente, mediante lenguajes de programación. Diseñar centro de datos para el correcto control de la información a través de la síntesis de requerimientos organizacionales. Diseñar la arquitectura (hardware/software) para garantizar el correcto funcionamiento de la información y toma de decisiones de la organización mediante estrategias de TIC.
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
                <div class="container" style="background-color:#37A6DE; color:white; display:none; padding:30px" id="hopeMaker">
                    <h4 style="text-align:center;">HopeMaker</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa, necessitatibus quod magni ad doloremque accusamus reprehenderit quia reiciendis eveniet perferendis molestiae dolor vel? Deleniti sint veniam quisquam eos!
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
                <div class="container" style="background-color:#37A6DE; color:white; display:none; padding:30px" id="tamalliMetsi">
                    <h4 style="text-align:center;">TamalliMetsi</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa, necessitatibus quod magni ad doloremque accusamus reprehenderit quia reiciendis eveniet perferendis molestiae dolor vel? Deleniti sint veniam quisquam eos!
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
                <div class="container" style="background-color:#37A6DE; color:white; display:none; padding:30px" id="cursoVerano">
                    <h4 style="text-align:center;">Curso de verano</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero iusto culpa, necessitatibus quod magni ad doloremque accusamus reprehenderit quia reiciendis eveniet perferendis molestiae dolor vel? Deleniti sint veniam quisquam eos!
                    </p>
                    <div>
                        <img src={{ asset('img/programaEducativo/IMG_5.jpg')}} class="w-100">
                    </div>
                    <br><br>
                    <h5>Elige la cantidad de tu aportación</h5>
                    <br>
                    <div class="d-grid gap-2 d-md-block">
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1200.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1500.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">$1800.00</a>
                        <a class="btn btn-primary" role="button" aria-expanded="false">Otro monto</a>
                    </div>
                </div>
            </div>
        </div>
         <div>
             <br><br><hr style="width:100%; height:1.5px">
            <h3>Preguntas frecuentes</h3>
            <div class="accordion" id="accordionExample">
                <button class="accordion" style="font-size: 18px">¿A que organización va mi donativo?</button>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus culpa odit veritatis esse cumque? Quis cupiditate neque cumque culpa. Harum ad adipisci eligendi beatae corporis facilis, odio a sunt vero.</p>
                    </div>

                    <button class="accordion" style="font-size: 18px">¿Mi recibo es deducible de inpuestos?</button>
                    <div class="panel">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit atque possimus officiis facilis! Minus in voluptates a repudiandae omnis enim obcaecati quisquam, veritatis est, doloremque id sapiente architecto cupiditate! Enim?</p>
                    </div>

                    <button class="accordion" style="font-size: 18px">¿Puedo contribuir de otra manera ademas de mi donativo?</button>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam incidunt harum voluptate nihil quod est, autem odio asperiores excepturi repellat ducimus corrupti at et maxime molestiae? Voluptatem velit reprehenderit illum.</p>
                    </div>
                    <button class="accordion" style="font-size: 18px">¿En donde se encuentran ubicados?</button>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam incidunt harum voluptate nihil quod est, autem odio asperiores excepturi repellat ducimus corrupti at et maxime molestiae? Voluptatem velit reprehenderit illum.</p>
                    </div>
            </div>
        </div>
    </div>

    </section>
</div>

    <div class="container" style="display:none; padding:30px" id="donaUSA">
        <h4 style="text-align:center;">Donations from USA</h4>
    </div>



<script>
    function donaMex(){
        document.getElementById("donaMex").style.display = "block";
        document.getElementById("donaUSA").style.display = "none";
        document.getElementById("btnMex").style.backgroundColor = "aquamarine";
        document.getElementById("btnUSA").style.backgroundColor = "blue";
        document.getElementById("btnMex").style.color = "black";
        document.getElementById("btnUSA").style.color = "white";
    }
    function donaUSA(){
        document.getElementById("donaMex").style.display = "none";
        document.getElementById("donaUSA").style.display = "block";
        document.getElementById("btnUSA").style.backgroundColor = "aquamarine";
        document.getElementById("btnMex").style.backgroundColor = "blue";
        document.getElementById("btnUSA").style.color = "black";
        document.getElementById("btnMex").style.color = "white";
    }
     function showProgramaEducativo() {
        document.getElementById("programaEducativo").style.display = "block";
        document.getElementById("programaResidencial").style.display = "none";
        document.getElementById("programaNutricion").style.display = "none";
        document.getElementById("hopeMaker").style.display = "none";
        document.getElementById("tamalliMetsi").style.display = "none";
        document.getElementById("cursoVerano").style.display = "none";
    }
    function showProgramaResidencial() {
        document.getElementById("programaEducativo").style.display = "none";
        document.getElementById("programaResidencial").style.display = "block";
        document.getElementById("programaNutricion").style.display = "none";
        document.getElementById("hopeMaker").style.display = "none";
        document.getElementById("tamalliMetsi").style.display = "none";
        document.getElementById("cursoVerano").style.display = "none";
    }
    function showProgramaSalud() {
        document.getElementById("programaEducativo").style.display = "none";
        document.getElementById("programaResidencial").style.display = "none";
        document.getElementById("programaNutricion").style.display = "block";
        document.getElementById("hopeMaker").style.display = "none";
        document.getElementById("tamalliMetsi").style.display = "none";
        document.getElementById("cursoVerano").style.display = "none";
    }

    function showHopeMaker(){
        document.getElementById("programaEducativo").style.display = "none";
        document.getElementById("programaResidencial").style.display = "none";
        document.getElementById("programaNutricion").style.display = "none";
        document.getElementById("hopeMaker").style.display = "block";
        document.getElementById("tamalliMetsi").style.display = "none";
        document.getElementById("cursoVerano").style.display = "none";
    }
    function showTamalliMetsi(){
        document.getElementById("programaEducativo").style.display = "none";
        document.getElementById("programaResidencial").style.display = "none";
        document.getElementById("programaNutricion").style.display = "none";
        document.getElementById("hopeMaker").style.display = "none";
        document.getElementById("tamalliMetsi").style.display = "block";
        document.getElementById("cursoVerano").style.display = "none";
    }
    function showProgramaCursoVerano(){
        document.getElementById("programaEducativo").style.display = "none";
        document.getElementById("programaResidencial").style.display = "none";
        document.getElementById("programaNutricion").style.display = "none";
        document.getElementById("hopeMaker").style.display = "none";
        document.getElementById("tamalliMetsi").style.display = "none";
        document.getElementById("cursoVerano").style.display = "block";
    }

</script>
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
        panel.style.display = "none";
        } else {
        panel.style.display = "block";
        }
    });
    }
</script>

@stop
