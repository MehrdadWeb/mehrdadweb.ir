<!--
Route::get('/', 'App\Http\Controllers\front\HomeController@index')->name('home');
-->
@extends('front.index')
@section('title')
Mehrdad&nbsp;Web| برنامه نویس وب سایت |طراحی سایت
@endsection
@section('content')

@include('front.intro')

<!-- صفحه اصلی main (font end) -->
<main id="main">
    <!--==========================
    1-1.About Us Section
    ============================-->
    @include('front.about')
    <!--==========================
    2-2.Services Section
    ============================-->
    @include('front.services')
    <!--==========================
    3.Why choose us? Section
    ============================-->
    {{-- @include('front.whychooseus') --}}
    <!--==========================
    Call To Action Section
    ============================-->
    {{-- @include('front.calltoaction') --}}
    <!--==========================
    3-4.Features Section
    ============================-->
    @include('front.skills')
    <!--==========================
    4-5.Portfolio Section
    ============================-->
    @include('front.portfolio')
    <!--==========================
    5-6.Clients Section توصیفات
    ============================-->
    @include('front.testimonials')
    <!--==========================
    6-7.Team Section
    ============================-->
    @include('front.team')
    <!--==========================
    8.Clients Section
    ============================-->
    {{-- @include('front.clients') --}}
    <!--==========================
    Pricing Section
    ============================-->
    {{-- @include('front.pricing') --}}
    <!--==========================
    Frequently Asked Questions Section سوالات متداول
    ============================-->
    {{-- @include('front.faq') --}}
</main>

@endsection
