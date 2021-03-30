@extends('home.master')


@section('nav')
    @include('home.global.nav.nav')
@endsection()

@section('body')
    @include('home.components.employees.show')
@endsection()
