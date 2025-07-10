
@extends('layout.base')
@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <style>
    html,
    body {
      position: relative;
      height: 100%;
      margin: 0;
      padding: 0;
    }

  </style>
@endsection

@section('content')


<main>
  
    @include('front.desing-art.sectiions.patricia-artist')
    @include('front.desing-art.sectiions.cindy-artist')
    @include('front.desing-art.sectiions.alvaro-artist')
    @include('front.desing-art.sectiions.luis-artist')

</main>

@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function (){
    
        console.log("Hey")
    
    var swiper = new Swiper("#container", {
      spaceBetween: 30,
      centeredSlides: true,
      effect: "fade",
      autoplay: {
        delay: 2000,
        disabledOnInteraction: false,
      }
    });

});
</script>
@endsection