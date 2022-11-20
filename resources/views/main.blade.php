<!DOCTYPE html>
<html lang="th"> 
    <head>
        <meta charset="utf-8">
        <title>test laravel</title>
        <meta name="description" content="">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
    </head>

    <body>

		<!-- Main content Start -->
        <div class="main-content">

            @if (1==1) 
                @include('header')
            @else
                @include('header2')
            @endif
                

            @yield('main-content5')

            @yield('main-content')
            @yield('main-content1')
            @yield('main-content2')
            @yield('main-content3')
            @yield('main-content4')

        </div> 
        <!-- Main content End -->


    </body>
</html>