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


    const scrollHeader = document.getElementById('scrollHeader');
    const mainHeader = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 800) {
            scrollHeader.classList.remove('hidden', 'pointer-events-none');
            scrollHeader.classList.add('hidden');
        } else {
            scrollHeader.classList.add('hidden', 'pointer-events-none');
            scrollHeader.classList.remove('hidden');
        }
    });

    window.addEventListener('scroll', () => 
{
    if(window.scrollY > 300){
        scrollHeader.classList.remove('hidden');
        mainHeader.classList.remove('fixed');
    } else {
        scrollHeader.classList.add('hidden')
                mainHeader.classList.add('fixed');

    }
});

    const btn_back = document.getElementById("btn-back-to-top");

function backToTop() {
  if (document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
    btn_back.classList.remove("hidden");
  } else {
    btn_back.classList.add("hidden");
  }

  btn_back.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
}

window.addEventListener("scroll", backToTop);
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
        @include("front.index.Sections.maps")
    </div>
@endsection