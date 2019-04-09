@extends('laravel-comet-theme::master')

@section('header')
    Bem-vindo ao Corpus de Aprendizes
@endsection

@section('footer')
    FFLCH :: Corpus Multilíngüe para Ensino e Tradução (COMET)
@endsection

@section('javascripts')
  @parent
  <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
@endsection
