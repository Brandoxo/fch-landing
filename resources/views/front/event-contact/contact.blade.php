
@extends('layout.base')
@section('css')
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      
    }

  </style>
@endsection

@section('content')


<main class="bg-carnita">

    <section class="bg-red grid grid-cols-1 md:grid-cols-2 h-full">
    @include('front.contact.sections.background')
    @include('front.contact.sections.form')
    @include('front.contact.sections.map')
    </section>
</main>

@endsection

<!-- @section('js')

@endsection -->