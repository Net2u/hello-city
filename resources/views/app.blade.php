<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- si on ne donne pas le contenu titre alors par défault Hello City sera choisi en 
    allant ds dossier config et fichier app.php et clé du tableau 'name' -->
    <title>@yield('titre', config('app.name'))</title>

</head>

<body>
    <div class="container">
        <!-- bloc de contenu qui change de page en page -->
        @yield('content')
        <footer>
            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center">
                        <p>&copy; Copyright {{ date('y') }}
                            <!-- si la methode is est fausse on affiche pas le lien about 
            si non on affiche le lien about -->
                            @if (! Route::is ('about'))
                            &middot; <a href=" {{ route('about') }}">About Us</a></p>
                            @endif
                        
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
        </script>
    </div>
</body>

</html>