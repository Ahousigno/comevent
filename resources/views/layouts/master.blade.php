<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>UVCIEVENT</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/offcanvas-navbar/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/offcanvas.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/1066a12b52.js" crossorigin="anonymous"></script>
</head>

<body class="bg-light">
<nav class="ff fixed-top">
    <div class="topnav">

    </div>
    <div class="bottomnav">
        <nav class="navbar navbar-expand-lg  navbar-dark" aria-label="Main navigation"  id="nav-bar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img class="me-3" src="img/logo.png" alt="" width="68" height="58"></a>
                <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse"
                        aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse  justify-content-around offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="http://127.0.0.1:8000/" id="nav-link">
                                <i class="fa fa-home" aria-hidden="true"></i> Accueil
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('infos')}}" id="nav-link">
                                <i class="fa fa-send" aria-hidden="true"></i> Soumettre un évènement
                            </a>
                        </li>
                        {{--<li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('apres')}}" id="nav-link">Après</a>
                        </li>--}}
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{route('apres')}}" id="nav-link">
                                <i class="fa fa-archive" aria-hidden="true"></i> Archive
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <!--
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form> -->
                        @if(Auth::user())
                            <li class="nav-item">
                                <ul class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button"
                                       data-bs-toggle="dropdown" id="nav-link">
                                        <i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()['name']}}
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Tableau de bord</a></li>
                                        <li><a class="dropdown-item" href="{{route('logout')}}">{{__('Deconnexion')}}</a></li>
                                        <!-- <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                                    </ul>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item" style="">
                                <a class="nav-link" href="{{route('login')}}" id="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Se connexion</a>
                            </li>
                            {{--<li class="nav-item">
                                <a class="nav-link" href="{{route('register')}}" id="nav-link">S'inscrire</a>
                            </li>--}}
                        @endif
                    </ul>

                </div>
            </div>
        </nav>
    </div>
</nav>




  {{--  <div class="d-flex align-items-letf p-3 my-3 text-black-50 bg-light rounded shadow-sm justify-content-center">

        <div class="lh-1">

            <h5 style="text-align: center">
                Bienvenue au service Juridique, Partenariat et Communication de
                L'Université
                Virtuelle de Côte d'Ivoire
            </h5>

            <h4>Vous êtes sur notre plateforme de l'évènementiel</h4>
        </div>
    </div>--}}


    <main class="">
        @yield("contenu")

    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script src="{{asset('js/bootstrap.bundle.min.js')}}"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="{{asset('js/offcanvas.js')}}"></script>

</body>

</html>
