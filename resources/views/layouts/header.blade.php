<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>{{$page_title}}</title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/templatemo-klassy-cafe.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">
    <link rel="shortcut icon" href="{{asset('media/logo/'.$setting->site_icon)}}" />
    </head>
    <body>
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    <!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img style="display:inline-block" src="{{asset('media/logo/'.$setting->logo)}}" align="klassy cafe html template">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="{{url('/#top')}}" class="active">Home</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#about')}}">About</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#menu')}}">Menu</a></li>
                        <li class="scroll-to-section"><a href="{{url('/#chefs')}}">Chefs</a></li> 
                        <li class="scroll-to-section"><a href="{{url('/#offers')}}">Klassy Week</a></li> 
                        <li class="scroll-to-section"><a href="{{url('/#reservation')}}">Contact Us</a></li>
                        <li class="scroll-to-section"><a href="{{url('/cart')}}">Cart<sup style="color:#FD9E95;font-weight:bold;font-size:14px;">({{$cartTotal}})</sup></a></li>
                        
                        @if (Route::has('login'))
                        @auth
                        <x-app-layout>
                        </x-app-layout>
                        
                        @else
                        <li><a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                        @endauth
                        @endif
                        
                    </ul>        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>