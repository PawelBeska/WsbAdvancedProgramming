@extends('home.master')


@section('nav')
    @include('home.global.nav.nav')
@endsection()

@section('body')
    @include('home.components.movies.show')
@endsection()
