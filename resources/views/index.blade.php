<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="data" content="">
    <meta name="author" content="">

    <title>FotologEnfil</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        body {
            padding-top: 70px; /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
        }

        .portfolio-item {
            margin-bottom: 25px;
        }

        footer {
            margin: 50px 0;
        }
    </style>

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">FotologEnfil</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('login') }}">Acesso</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <div class="container theme-showcase" role="main">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-center">
                    {!! Form::open(['route' => 'search', 'files' => true, 'class' => 'form-inline']) !!}
                    <div class="form-group">

                    </div>
                    {!! Form::input('date','date', null ,['class' => 'form-control']) !!}
                    <div class="form-group">
                        {!! Form::submit('Buscar', ['class' => 'btn btn-primary center-block']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <br>

            <div class="row">
                @foreach($files as $file)
                <div class="col-md-4 portfolio-item">
                    <div class="panel panel-default">

                        <img class="img-responsive" src="{{ asset("img/uploads/$file->path") }}">

                        <p align="center"><b>{{ $file->name }}</b></p>
                        <p align="center">{{date('d-m-Y', strtotime($file->created_at))}}</p>
                        <p align="center">{{ $file->description }}</p>
                        <p align="center">
                            <a href="{{ url('show', ['id' => $file->id]) }}">
                                Visualizar galeria
                            </a>
                        </p>
                    </div>

                </div>
                @endforeach
            </div>

            {!! $files->render() !!}

<footer class="section section-success">
    <div class="background-image"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h1>Footer header</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisici elit,
                    <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud</p>
            </div>
            <div class="col-sm-6">
                <p class="text-info text-right">
                    <br>
                    <br>
                </p>
                <div class="row">
                    <div class="col-md-12 hidden-lg hidden-md hidden-sm text-left">
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 hidden-xs text-right">
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                        <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
        </div>
    </div>

</body>
</html>