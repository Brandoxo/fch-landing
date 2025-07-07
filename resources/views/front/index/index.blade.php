@extends('layout.base')

@section('title', 'Hotel FCH Expo')

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<style>
    html{
        scroll-behavior: smooth;
    }
</style>
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
    const swiper3 = new Swiper("#hero-carousel", {
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        parallax: true,
        loop: true,
        spaceBetween: 30,
        effect: "fade",
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const swiper1 = new Swiper("#coments-carousel", {
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false,
        // },
        loop: true,
        slidesPerView: 1,
        breakpoints: {
            640: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 2,
            },
        },
        spaceBetween: 30,
    });
    </script>
@endsection

@section('content')
    <div>
        @include("front.index.Sections.hero")
        @include("front.index.Sections.about")
        @include("front.index.Sections.phrases")
        @include("front.index.Sections.hotels")
        @include("front.index.Sections.amenities")
        @include("front.index.Sections.restaurant")
        @include("front.index.Sections.art")
        @include("front.index.Sections.cards")
        @include("front.index.Sections.reviews")
        @include("front.index.Sections.visit")
    </div>
@endsection