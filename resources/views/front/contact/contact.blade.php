
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
    
    @include('front.contact.sections.form')

</main>

@endsection

<!-- @section('js')

@endsection -->