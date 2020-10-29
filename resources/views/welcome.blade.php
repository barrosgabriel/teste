@extends('layouts.master')
@section('title','Colegio São Leopoldo')
@section('content')

<div class="conteudo">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
              <a href="PedroSchneider"a>
            <img src="{{ URL::to('/imagens/1.png') }}" class="d-block w-100" alt="..." width="">
          </div>
          <div class="carousel-item">
            <a href="Gusch"a>
            <img src="{{ URL::to('/imagens/2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <a href="Sesi"a>
            <img src="{{ URL::to('/imagens/3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="conteudo">
        <div class="row d-flex justify-content-around">
            <div class="col-sm-3">
                <div class="card text-center">
                    <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Cadastro Exemplo</h4>
                        <p class="card-text"></p>
                        <a href="{{ route('cadastro') }}" class="btn btn-primary stretched-link">Link cadastro</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center">
                    <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Lista Exemplo</h4>
                        <p class="card-text"></p>
                        <a href="{{ route('lista') }}" class="btn btn-primary stretched-link">Link lista</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card text-center">
                    <img class="card-img-top" src="{{ URL::to('/imagens/images.png') }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">PDF Exemplo</h4>
                        <p class="card-text"></p>
                        <a href="{{ route('pdf') }}" class="btn btn-primary stretched-link">Link lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection