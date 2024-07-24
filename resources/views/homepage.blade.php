@extends('layouts.app')

@section('title', 'Home')

@section('content')

    @include('partials.bannaer-section')
    <!--  brand section -->
    @include('partials.brand-section')
    <!-- about and counter section -->
    @include('partials.about-section')
    <!-- Popular Subject Sectoion-->
    @include('partials.popular-subject-section')
    <!-- courses section -->
    @include('partials.courses-section')
    <!-- Registration Sectoion-->
    @include('partials.registration-section')
    <!-- pricing plan section -->
    @include('partials.pricing-plan-section')
    <!-- About Instructor Section-->
    @include('partials.about-instructor-section')
    <!-- News and blog section -->
    @include('partials.blog-section')

@endsection
