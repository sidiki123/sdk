@extends('layouts.app')

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto" id="gauche">
                    <img src="../assets/img/log.png" alt="logo">
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li><button class="btn bnt-danger"><a href="{{route('index')}}">Acceuil</a></button></li>
                  <li><button class="btn btn-danger"><a href="#" id="men">Nos Formations</a></button></li>
                  <li><button class="btn btn-danger"><a href="#" id="men">Nos Simplonniens</a></button></li>
                  <li><button class="btn btn-danger"><a href="#" id="men">Notre equipe</a></button></li>
                  <li><button class="btn btn-danger"><a href="#" id="men">Contact</a></button></li>
                </ul>

            </div>

        </div>

    </nav>
    <div>
        <form class="form-inline" id="searchbar">
            <input class="form-control mr-sm-2" type="search" placeholder="Entrer votre recherche" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" id="ser" type="submit" >Rechercher</button>
          </form>
    </div>

    <main class="py-4">
        @yield('content')
    </main>

</div>
