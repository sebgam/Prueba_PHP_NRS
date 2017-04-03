<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo')</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/stilos.css')}}">
    
</head>
<body>
  <header>
    <!-- menu responsive...................... -->
    <nav class="navbar navbar-inverse navbar-fixed-top" >
        <div class="container">
           
                          
            <div class="navbar-header">
              <a class="navbar-brand" href="#">
                <img alt="Brand" src="{{ asset('img/100px.png')}}" width="50">
              </a>
            </div>
                          
                        
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
                    <span class="sr-only">desplegar</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand"> RANK PELIS</a>
            </div>
            
             <!-- inicia menu...................... -->
            <div class="collapse navbar-collapse" id="navegacion-fm">
      <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Inicio</a></li>
                    
                    <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                           Categorias
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{url('/')}}">Todas</a></li>
                             <li role="separator" class="divider"></li>
                            <li><a href="{{url('/comedia')}}">Comedia</a></li>
                            <li><a href="{{url('/terror')}}">Terror</a></li>
                            <li><a href="{{url('/accion')}}">Acción</a></li>
                            <li><a href="{{url('/aventura')}}">Aventura</a></li>
                            <li><a href="{{url('/ciencia_ficcion')}}">Ciencia ficción</a></li>
                          </ul>
                    </li>
                    
                    <li><a href="{{url('/destacadas')}}"><span class="glyphicon glyphicon-tasks"></span> Destacadas</a></li>
                    <li><a href="#login" data-toggle="modal"> <span class="glyphicon glyphicon-log-in"></span> Iniciar sesión</a></li>
                    <li><a href="#" data-toggle="modal"></a></li>
                    <li><a href="#" data-toggle="modal"></a></li>
                    <li class="bieLi"><a href=""><span class="bieSpan" ">Bienvenid@ {{session()->get('sesionCliente', ' por favor inicia sesión')}}</a></span></li>
                    <li><a href="{{url('/cerrarSesion')}}"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li>
                     
                    
      </ul>
                                                
                                               
                         
                        
                          

     
                </div> 
            </div> 
       </div>
  </nav>
            
                              <!-- registro........... -->
      <div class="modal fade" id="login">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title">Iniciar sesion</h4>
                 </div>
                 <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3">
                           <img src="{{ asset('img/user.png')}}"  width="120" alt=""> 
                    </div>
                 
                        <div class="col-md-8">
                                <form class="form-horizontal" action="/empezar_a_votar" method="post" id="formRegistro">
                                {{csrf_field()}}
                                      <div class="form-group">
                                        <label for="nom" class="col-sm-3 control-label">Nombre</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="nom" name="nombre" placeholder="Nombre">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="ape" class="col-sm-3 control-label">Apellido</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="ape" name="apellido" placeholder="Apellido">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="id" class="col-sm-3 control-label">ID</label>
                                        <div class="col-sm-9">
                                          <input type="text" class="form-control" id="id" name="id_cliente" placeholder="Ingrese su numero de indentificación">
                                        </div>
                                      </div>
                                      
                                      <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                          <button type="submit" class="btn btn-success">Empezar a votar</button>
                                        </div>
                                      </div>
                                </form>
                        </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                 </div>
         </div>
     </div>
         
                     
                    
                 
                 
            
     
     <!-- header ................ -->
     
     
  </header>
  <section class="jumbotron jumbotron-sg">
      <div class="container">
          
          <div class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object hidden-xs hidden-sm" width="300" src="{{ asset('img/log.png')}}" alt="...">
                    </a>
                                  </div>
                  <div class="media-body "><br>
                    <h4 class="media-heading titulo-blog">Rank Pelis</h4>
                    <p>¡Califica tus peliculas favoritas rápidamente! Nuestros Ranking son los mas populares de la web</p>
                    <img class="img-responsive bannerImg" src="{{ asset('img/ban.png')}}" alt="">
                  </div>
                </div>
                
       </div>
      </div>
          
          <!-- contenido............-->
          
  </section>
  
   <section class="main container">
       <div class="row">
           <section class="posts col-md-9" >
               <div class="migas-de-pan">
                   <ol class="breadcrumb">
                       
                   @yield('migas')
                       
                   </ol>
               </div>
               
               
              @yield('section')
               <!--peliculas.....................-->
               
               
           </section>
           
           <!--aside.................... -->
           
            
           
           <aside class="col-md-3 hidden-xs hidden-sm">
         <h4>Categorias</h4>
         <div class="list-group">
             <a href="{{url('/')}}" class="list-group-item active">Todas</a>
             <a href="{{url('/comedia')}}" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Comedia</a>
             <a href="{{url('/terror')}}" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Terror</a>
             <a href="{{url('/accion')}}" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Acción</a>
             <a href="{{url('/aventura')}}" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Aventura</a>
             <a href="{{url('/ciencia_ficcion')}}" class="list-group-item"><span class="glyphicon glyphicon-plus"></span> Ciencia ficcion</a>
             
         </div>
         <h4>Calificadas recientemente</h4>
         <a href="{{url('/ver_todas')}}" class="btn col-md-12 btn-success">Ver todas</a><br><br>
         <div class="col-md-12">         
          <a href="{{url('/ver_todas')}}"><img src="{{ asset('img/aside2.png')}}"  class="img-thumbnail"></a>
           

      </div>
         
         
     </aside> 
       </div>
       
   </section>
     
    
      <!--ainicio footer ............... -->
      <footer>
          <div class="container">
              <div class="row">
                  <div class="col-xs-6">
                      <p>Copyright © 2017 - Sebastian Gamboa </p>
                  </div>
                  <div class="col-xs-6">
                      <ul class="list-inline text-right">
                          <li><a href="{{url('/')}}">Inicio</a></li>
                          <li><a href="{{url('/destacadas')}}">Destacadas</a></li>
                         
                      </ul>
                  </div>
              </div>
          </div>
      </footer>
 
  
  
    
    <script src="{{ asset('plugins/bootstrap/js/jquery-3.0.0.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('plugins/bootstrap/js/validar.js')}}"></script>
    



</body>
</html>