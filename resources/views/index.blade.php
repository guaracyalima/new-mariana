
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Galeria de Imagens</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="navbar navbar-default navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img height="20" alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC"></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="file:///C:/Users/guabirabaDev/AppData/Roaming/Skype/My%20Skype%20Received%20Files/galeria.html#">Admin</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Galeria de Imagens<br></h1>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            @foreach($files as $file)
                <div class="col-md-4">
                    <a class="btn" data-toggle="modal" data-target="#galeria"><img src="{{asset("img/uploads/$file->path")}}" class="img-responsive"></a>
                    <h3>{{ $file->name }}</h3>
                    <p>{{ $file->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
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

@foreach($files as $file)
<div class="modal fade" id="galeria">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <div id="fullcarousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="{{asset("img/uploads/$file->path")}}">
                            <div class="carousel-caption">
                                <h2>{{$file->name}}</h2>
                                <p>{{$file->description}}</p>
                            </div>
                        </div>
                        <div class="item">
                            <img src="{{asset("img/uploads/$file->path")}}">
                            <div class="carousel-caption">
                                <h2>{{$file->name}}</h2>
                                <p>{{$file->description}}</p>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
                    <a class="right carousel-control" href="#" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
    @endforeach


</body></html>