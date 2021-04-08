<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- si on ne donne pas le contenu titre alors par défault Hello City sera choisi en 
    allant ds dossier config et fichier app.php et clé du tableau 'name' -->
    <title>@yield('titre', config('app.name'))</title>

</head>

<body>
    <!-- bloc de contenu qui change de page en page -->
    @yield('content')

    <footer>
        <p>&copy; Copyright {{ date('y') }}
            <!-- si la methode is est fausse on affiche pas le lien about 
            si non on affiche le lien about -->
            @if (! Route::is ('about'))
            &middot; <a href=" {{ route('about') }}">About Us</a>
            @endif
        </p>
    </footer>
</body>

</html>