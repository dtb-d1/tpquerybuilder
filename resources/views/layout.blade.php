<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>@yield('title')</title>
 <!-- Ajouter CDN Bootstrap CSS -->
 </head>
 <body>
 @include('includes.header')
 <div class="container">
 @yield('content')
 </div>
 @include('includes.footer')
 @yield('script')
 <!-- Ajouter CDN Bootstrap JS -->
 </body>
</html>