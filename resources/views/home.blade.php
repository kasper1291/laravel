@extends('layouts.app')

@section('title')
    Home page
@endsection


@section('content')
    @include('includes.portfolio')

    @include('includes.process')

    @include('includes.howWeWorks2')

    @include('includes.howWeWorks3')

    @include('includes.price')

    @include('includes.mobileImage')

    @include('includes.about')

    @include('includes.questions')

    @include('includes.reviews')
@endsection



