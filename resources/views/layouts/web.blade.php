<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', env('APP_NAME'))</title>

    <meta name="robots" content="noindex">

    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   
    {{-- Favicon --}}
   
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    
    {{-- <link rel="manifest" href="./site.webmanifest">
    <meta name="msapplication-config" content="./browserconfig.xml"> --}}

    {{-- Meta --}}
    <meta name="author" content="@yield('meta_author', '')">
    <meta name="keywords" content="@yield('meta_keywords', '')">
    <meta name="description" content="@yield('description')" />
    <meta property="og:site_name" content="{{''}}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="og:url" content="@yield('canonical')" />
    <link rel="canonical" href="@yield('canonical')" />
    <title>@yield('title')</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}">
 
    {{-- intl Tel Input CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style> .iti{ width: 100%; } </style> 
   {{-- google-font-family --}}
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">

    @yield('links')

    <style>
      @keyframes tada {
          from {
            transform: scale3d(1, 1, 1);
          }
        
          10%, 20% {
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
          }
        
          30%, 50%, 70%, 90% {
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
          }
        
          40%, 60%, 80% {
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
          }
        
          to {
            transform: scale3d(1, 1, 1);
          }
        }
        
        .tada {
          animation-name: tada;
        }


    </style>
    {{-- FontAwsome 6 --}}
    <script src="https://kit.fontawesome.com/2c6b599d00.js" crossorigin="anonymous"></script>

    {{-- Alpine Js Cdn --}}
    <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>

    {{-- Jquery --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

    {{--  --}}
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>

      

</head>
<body class="">

    @include('partials.frontend.navbar-new')

      @yield('content') 

     @include('partials.frontend.footer-new')  

    {{-- {{ TawkTo::widgetCode("https://tawk.to/chat/". env('TAWKTO_LINK') ) }} --}}
    {{-- Tawto --}}
    {{ \TawkTo::widgetCode('https://embed.tawk.to/6258123cb0d10b6f3e6d92a6/1g0k0efnu') }}
    {{-- scripts --}}
    
    {{-- jQuery cdn --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- AJAX jQuery cdn --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- intl Tel Input JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
    @yield('scripts')   
</body>
</html>
