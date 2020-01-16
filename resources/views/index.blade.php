@extends('plantilla')
@section('titulo')
Crossover LATAM
@endsection
@section('css')
styles
@endsection('css')
@section('main')

  <div class="">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <!-- indicators
       <ol class="carousel-indicators">
           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
           <li data-target="#myCarousel" data-slide-to="1"></li>
           <li data-target="#myCarousel" data-slide-to="2"></li> -->
      </ol>
      <div class="carousel-inner">
        <div class="vp carousel-item active">
          <img src="/img/CrossoverTop3.png" class="d-block w-100" alt="">
        </div>
        <div class="vp carousel-item">
          <img src="/img/CrossoverTop4.png" class="d-block w-100" alt="...">
        </div>
        <div class="vp carousel-item">
          <img src="/img/CrossoverTop5.png" class="d-block w-100" alt="...">
        </div>
        <div class="vp carousel-item">
          <img src="/img/CrossoverTop2.png" class="d-block w-100" alt="...">
        </div>
        <div class="vp carousel-item">
          <img src="/img/CrossoverTop.png" class="d-block w-100" alt="...">
        </div>
      </div>
      {{-- <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> --}}
    </div>
  </div>


<div class="black">

</div>
@endsection('main')
