<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
{!! Html::style('lib/bootstrap/bootstrap.min.css') !!}
{!! Html::style('css/formaweb.css') !!}
<title>@yield('titrePage')</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
    <div class="container">

        <a class="navbar-brand" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Accueil
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Les Héros
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                        Top Ladder
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Liste des formations</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<header>
    <h1>@yield('titreItem')</h1>
</header>
@yield('contenu')

<footer class="footer">
    <p>BrawlStar Companion, un site modeste proposant quelques statistiques sur le jeu BrawlStar</p>
</footer>
{!! Html::script('lib/jquery/jquery-3.3.1.slim.min.js') !!}
{!! Html::script('lib/js/bootstrap.bundle.js') !!}
{!! Html::script('lib/js/bootstrap.js') !!}
{!! Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
</body>
</html>