 <?php Session::get('sesionCliente'); ?>
@foreach($valoracion as $valoraciones)
   
       <div class="col-md-4">         
            <div class="thumbnail">
               <img src="{{ asset('img/peliculas/'. $valoraciones->imagen)}}" data-toggle="tooltip" title="{{$valoraciones->titulo}}" alt="">
               <div class="campiton">
                   <p></p>
                   <div class="row">
                      <div class="col-md-12">
                          <ul class="list-group">
                              <li class="list-group-item list-group-item-default">Tú calificacion <span class="badge"><span class="glyphicon glyphicon-star-empty"></span>
                              <!--muestra mi calficacion...................... -->  
                                @if(Session::get('sesionCliente'))
                                @foreach($valoracion as $valoraciones2)
                                  @if ($valoraciones2->titulo == $valoraciones->titulo)
                                      {{$valoraciones->valoracion}}
                                  @endif
                                @endforeach
                                @endif       
                              </span></li>                                                          
                          </ul>
                          <div class="col-md-6">
                            <a href="{{route('eliminar',$valoraciones->titulo)}}" class="btn btn-danger" title="Eliminar calificacion"><span class="glyphicon glyphicon glyphicon-trash"> Eliminar</span></a>
                          </div>
                          <div class="col-md-6">
                            <a href="{{route('cambiar',$valoraciones->titulo)}}" class="btn btn-success" title="Actualizar Calificacion"><span class="glyphicon glyphicon glyphicon glyphicon-refresh"> Cambiar</span></a>
                          </div>

                      </div>
                  </div>
               </div>    
         </div>
      </div>
    

@endforeach