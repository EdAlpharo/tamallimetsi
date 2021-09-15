<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo asset('css/base.css')?>" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <title>Tamallimetsi</title>
</head>
<body>


<!-- Sidebar -->
<div style="background-color:#f8f9fa">
<img src="{{ asset('img/Logo.png')}}" class="logo" style="width: 125px; height: 125px; float:center; display:block;margin:0 auto 0 auto; border-radius:10%">
</div>

<nav class="navbar-nav navbar-expand-sm navbar-light bg-light" id="topheader">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarsExample11">
            <ul class="navbar-nav">
            <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="/">INICIO</a>
                </li>
                <li class="divider-vertical-second-menu"></li>
                <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="/nosotros">NOSOTROS</a>
                </li>
                <li class="divider-vertical-second-menu"></li>
                <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="/historia">NUESTRA HISTORIA</a>
                </li>
                <li class="divider-vertical-second-menu"></li>
                <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="/producto">NUESTRO PRODUCTO</a>
                </li>
                <li class="divider-vertical-second-menu"></li>
                <li class="nav-item">
                    <a class="nav-link active navbar-brand" href="/social">ESQUEMA SOCIAL</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--Fin navbar-->

@yield('vistaBase')
@extends('layouts.foot')
</body>
</html>
