<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Proteus - Pages - Error - 404</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- ===== FAVICON =====-->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- ===== CSS =====-->
    <!-- General-->
    <link rel="stylesheet" href="{{asset('admin/css/basic.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/general.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/theme.css')}}" class="style-theme">
    
    <!-- Specific-->
    <link rel="stylesheet" href="{{asset('admin/css/addons/theme/jasny-bootstrap.css')}}" class="style-theme-addon"/>
    <!--[if lt IE 9]>
    <script src="js/basic/respond.min.js"></script>
    <script src="js/basic/html5shiv.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!--[if lt IE 9]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!--Main Content-->
    <section id="error-bg" class="error-container">
      <div id="error-particle" class="hide"></div>
      <div class="error-404">
        <div class="center-outer">
          <div class="center-inner">
            <div class="center-content error-404-content"><i class="error-icon fa fa-exclamation-circle"></i>
              <h1 class="font-light">Erro <span>404</span></h1>
              <h3 class="font-extralight">
                
                Pagina não encontrada !
              </h3>
              <div class="info">
                <p>Desculpe, a pagina que você tentou acessar ainda não existe ou esta indisponivel no momento !</p>
                <p>Tente novamente mais tarde ou contate o administrador do sistema</p>
              </div><a href="{{url('/')}}" class="btn btn-labeled btn-dark mr"><span class="btn-label"><i class="fa fa-chevron-left vam"></i></span>Voltar</a><a href="{{url('/')}}" class="btn btn-labeled btn-dark">Dashboard<span class="btn-label btn-label-right"><i class="fa fa-dashboard vam"></i></span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ===== JS =====-->
    <!-- jQuery-->
    <script src="{{asset('admin/js/basic/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/basic/jquery-migrate.min.js')}}"></script>
    <!-- General-->
    <script src="{{asset('admin/js/basic/modernizr.min.js')}}"></script>
    <script src="{{asset('admin/js/basic/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/shared/jquery.asonWidget.js')}}"></script>
    <script src="{{asset('admin/js/plugins/plugins.js')}}"></script>
    <script src="{{asset('admin/js/general.js')}}"></script>
    <!-- Semi general-->
    <script type="text/javascript">
      var paceSemiGeneral = { restartOnPushState: false };
      if (typeof paceSpecific != 'undefined'){
      	var paceOptions = $.extend( {}, paceSemiGeneral, paceSpecific );
      	paceOptions = paceOptions;
      }else{
      	paceOptions = paceSemiGeneral;
      }
      
    </script>
    <script src="js/plugins/pageprogressbar/pace.min.js"></script>
    <!-- Specific-->
    <script src="js/plugins/errors/jquery.particleground.min.js"></script>
    <script src="js/calls/page.error.js"></script>
  </body>
</html>