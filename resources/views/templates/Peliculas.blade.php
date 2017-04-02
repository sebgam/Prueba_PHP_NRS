<?php  $contador = 1; 
 Session::get('sesionCliente'); ?>
@foreach($categorias as $categoria)
   <?php $contador++; ?> 
   		
 		<div class="col-sm-6 col-xs-12 col-md-4">
      <form action="/calificar" method="post" id="form{{$contador}}">
         {{csrf_field()}}
               <div class="thumbnail avatar view-team">
               <img src="{{ asset('img/peliculas/'. $categoria->imagen)}}" data-toggle="tooltip" title="{{$categoria->titulo}}">
               <div class="campiton">
                 <p class="clasificacion">
                        <input id="radio10{{$contador}}" type="radio" name="valoracion" value="10">
                        <label for="radio10{{$contador}}">★</label>
                        <input id="radio9{{$contador}}" type="radio" name="valoracion" value="9">
                        <label for="radio9{{$contador}}">★</label>
                        <input id="radio8{{$contador}}" type="radio" name="valoracion" value="8">
                        <label for="radio8{{$contador}}">★</label>
                        <input id="radio7{{$contador}}" type="radio" name="valoracion" value="7">
                        <label for="radio7{{$contador}}">★</label>
                        <input id="radio6{{$contador}}" type="radio" name="valoracion" value="6">
                        <label for="radio6{{$contador}}">★</label>
                        <input id="radio5{{$contador}}" type="radio" name="valoracion" value="5">
                        <label for="radio5{{$contador}}">★</label>
                        <input id="radio4{{$contador}}" type="radio" name="valoracion" value="4">
                        <label for="radio4{{$contador}}">★</label>
                        <input id="radio3{{$contador}}" type="radio" name="valoracion" value="3">
                        <label for="radio3{{$contador}}">★</label>
                        <input id="radio2{{$contador}}" type="radio" name="valoracion" value="2">
                        <label for="radio2{{$contador}}">★</label>
                        <input id="radio1{{$contador}}" type="radio" name="valoracion" value="1">
                        <label for="radio1{{$contador}}">★</label>
                  </p>
                      <input type="text" name="titulo" value="{{$categoria->titulo}}" style="display:none">          
                      <input type="text" name="imagen" value="{{$categoria->imagen}}" style="display:none">          
                   <p></p>

                          <!-- ...............calificaciones...................... -->

                   <div class="row">
                      <div class="col-md-12">
                          <ul class="list-group">
                              <li class="list-group-item list-group-item-success">Calificaciones <span class="badge"><span class="glyphicon glyphicon-star-empty"></span>
                                
                                <!--muestra el numero de veces que a sido calificada una pelicula...................... -->  
                                
                                <?php   $cont = 0; ?>
                                @foreach($valoracion2 as $valoracionesTotal)
                                  @if ($valoracionesTotal->titulo == $categoria->titulo)
                                      <?php $cont++; ?>
                                  @endif

                                @endforeach
                                  {{$cont}}
                                  
                                      

                              </span></li>
                              <li class="list-group-item list-group-item-default">Tú calificacion <span name="tuCalificacion" class="badge"><span class="glyphicon glyphicon-star-empty"></span>
                              <!--muestra mi calficacion...................... -->  
                                @if(Session::get('sesionCliente'))
                                @foreach($valoracion as $valoraciones)
                                  @if ($valoraciones->titulo == $categoria->titulo)
                                      {{$valoraciones->valoracion}}
                                  @endif
                                @endforeach
                                @endif       
                              </span></li>
                              <li class="list-group-item list-group-item-danger">Calificación general <span class="badge"><span class="glyphicon glyphicon-star-empty"></span>
                                <!--muestra promedio de calficacion...................... -->
                                 
                                <?php   $cont = 0; $suma = 0;?>
                                @foreach($valoracion2 as $valoracionesTotal)
                                  @if ($valoracionesTotal->titulo == $categoria->titulo)
                                      <?php 
                                          $valor = $valoracionesTotal->valoracion;
                                          $suma = $suma + $valor;
                                      $cont++; ?>
                                  @endif
                                @endforeach
                                @if($suma>0)
                                  <?php $promedio = $suma/$cont; ?>
                                  {{round($promedio, 1, PHP_ROUND_HALF_UP)}}
                                @else
                                    0
                                @endif 
                                   
                              </span></li>
                          </ul>
                              <button class="btn btn-lg btn-block btn-success" type="submit">Calificar</button>
                      </div>
                  </div>
               </div>    
            </div>
        </form>
      </div>

@endforeach


                

                                  
                                




                                  




