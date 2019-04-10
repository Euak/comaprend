@extends('laravel-comet-theme::master')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('header')
    Corpus de Aprendizes
@endsection

@section('body_top')
<div id="app">
@endsection
    @section('menu-itens')
        <li class="nav-item active divider-vertical">
            <router-link to="/">
                <a class="nav-link" >Home</a>
            </router-link>
        </li>
    @endsection
    @section('content')
        <router-view></router-view>
    @endsection
@section('body_bottom')
</div>
@endsection

@section('footer')
    FFLCH :: Corpus Multilíngüe para Ensino e Tradução (COMET)
@endsection

@section('javascripts')
    @parent
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
@endsection
