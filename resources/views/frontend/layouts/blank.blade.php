<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}" />

        <title>@yield('title', trans('home.meta-title'))</title>

        <!-- Meta -->
        <meta name="description" content="@yield('meta_description', trans('home.meta-description'))">
        @yield('meta')

        <!-- Styles -->
        {{--@yield('before-styles-end')--}}

        {{--{{ Html::style(elixir('css/frontend/frontend.css')) }}--}}

        {{--@yield('after-styles-end')--}}

        {{--<!-- Fonts -->--}}
        {{--{{ Html::style('https://fonts.googleapis.com/css?family=Lato:100,300,400,700') }}--}}
    </head>
    <body id="app-layout">

        <div class="container">
            {{--@include('includes.partials.messages')--}}
            @yield('content')
        </div><!-- container -->

        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('js/vendor/jquery/jquery-2.1.4.min.js')}}"><\/script>')</script>
        {!! Html::script('js/vendor/bootstrap/bootstrap.min.js') !!}

        {{--@yield('before-scripts-end')--}}
        {{--{!! Html::script(elixir('js/frontend/frontend.js')) !!}--}}
        {{--@yield('after-scripts-end')--}}

        {{--@include('includes.partials.ga')--}}
    </body>
</html>