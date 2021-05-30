@extends('layouts.app')
@section('title','Center')
@section('styles')
<link rel="stylesheet" href="{{ url('/user/css/lab_page.css') }}">
@endsection

@section('content')
  <!-- Start Content -->
  <div class="container text-center">
    <header>
      <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active"
            style="background-image: url('././orgAdmin/img/center-slider-1.jpg');height: 500px;background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item"
            style="background-image: url('././orgAdmin/img/center-slider-2.jpg');height: 500px;background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"
            style="background-image: url('././orgAdmin/img/center-slider-3.jpg');height: 500px;background-size: cover;">
            <div class="carousel-caption d-none d-md-block">
            </div>
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
    </header>
    <div class="row">
      <h1 class="col-12  text-center text-muted py-5  display-4 font-weight-bold">Medical Radiation Centers</h1>
      <p class="offset-1 col-10  text-justify">
        Medical imaging is the technique and process of creating visual representations of the interior of a body for
        clinical analysis and medical intervention, as well as visual representation of the function of some organs or
        tissues (physiology). Medical imaging seeks to reveal internal structures hidden by the skin and bones, as well
        as to diagnose and treat disease. Medical imaging also establishes a database of normal anatomy and physiology
        to make it possible to identify abnormalities. Although imaging of removed organs and tissues can be performed
        for medical reasons, such procedures are usually considered part of pathology instead of medical imaging.
      </p>
    </div>

    <!-- start partners -->
    <section class="pb-5" id="partners">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-md-12">
            <h2 class=" bounceIn text-center text-muted py-5  display-4 font-weight-bold"><span>Parteners</span></h2>
          </div>
          <?php $count=0;?>
          @foreach($rcenter as $one)
          <?php $count+=1;?>
          @if($count < 4 )
          <!-- Item1 -->
          <div class="card pt-3  mb-xs-5 mb-4 mx-auto text-center boxshaow moreBox"
            style="width: 18rem;">
            <img class="card-img-top rounded-circle imageshaow mx-auto" src='{{URL::asset("/orgAdmin/img/$one->logo")}}' alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$one->name}}</h5>
              <p  class="card-text" >{{substr($one->about_us, 0,50)}}....</p>
              <a href='{{URL::asset("/centerPartner/$one->id")}}' class="btn btn-primary">Read More</a>
            </div>
          </div>
          @else
          <div class="card pt-3  mb-xs-5 mb-4 mx-auto text-center boxshaow moreBox"
            style="width: 18rem; display: none;">
            <img class="card-img-top rounded-circle imageshaow mx-auto" src='{{URL::asset("/orgAdmin/img/$one->logo")}}' alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$one->name}}</h5>
              <p  class="card-text" >{{substr($one->about_us, 0,50)}}....</p>
              <a href='{{URL::asset("/centerPartner/$one->id")}}' class="btn btn-primary">Read More</a>
            </div>
          </div>
          @endif
          @endforeach
          <div id="loadMore"  class="text-center col-12 text-muted py-5  display-4 font-weight-bold"><button class="btn btn-primary"><h5>See More</h5></button></div> 

        </div>
      </div>

    </section>
    <!-- end partner -->
  </div>
  <!-- End Content -->
  <!-- ------------------------------------- -->
  @endsection
  @section('scrollingIcon')
  <li><a class="scroll-to-top" scroll-to-top-time="2000"><i class="fa fa-arrow-circle-up"></i></a></li>
@endsection
@section('scripts')
  <script src="{{ url('/user/js/main.js') }}"></script>
  <script src="{{ url('/user/js/seemore.js') }}"></script>
@endsection