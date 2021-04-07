<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- si on ne donne pas le contenu titre alors par défault alors Hello City sera choisi -->
    <title>@yield('titre', 'Hello City')</title>

</head>

<body>
    <!-- bloc de contenu qui change de page en page -->
    @yield('content')

    <footer>
        <p>&copy; Copyright {{ date('y') }} &middot; <a href="/about-us">About Us</a></p>
    </footer>
</body>

</html>