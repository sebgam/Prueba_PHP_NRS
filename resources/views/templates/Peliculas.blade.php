<?php $contador = 1; ?>

@foreach($categorias as $categoria)

   <?php $contador++; ?>
		
 		<div class="col-sm-6 col-xs-12 col-md-4">
      <form action="" method="post" id="form<?php echo $contador ?>">
               <div class="thumbnail avatar view-team">
               <img src="{{ asset('img/peliculas/'. $categoria->imagen)}}" data-toggle="tooltip" title="{{$categoria->titulo}}">
               <div class="campiton">
                 <p class="clasificacion">
                        <input id="radio10" type="radio" name="estrella" value="10">
                        <label for="radio10">★</label>
                        <input id="radio9" type="radio" name="estrellas" value="9">
                        <label for="radio9">★</label>
                        <input id="radio8" type="radio" name="estrellas" value="8">
                        <label for="radio8">★</label>
                        <input id="radio7" type="radio" name="estrellas" value="7">
                        <label for="radio7">★</label>
                        <input id="radio6" type="radio" name="estrellas" value="6">
                        <label for="radio6">★</label>
                        <input id="radio5" type="radio" name="estrellas" value="5">
                        <label for="radio5">★</label>
                        <input id="radio4" type="radio" name="estrellas" value="4">
                        <label for="radio4">★</label>
                        <input id="radio3" type="radio" name="estrellas" value="3">
                        <label for="radio3">★</label>
                        <input id="radio2" type="radio" name="estrellas" value="2">
                        <label for="radio2">★</label>
                        <input id="radio1" type="radio" name="estrellas" value="1">
                        <label for="radio1">★</label>
                  </p>
                                
                   <p></p>
                   <div class="row">
                      <div class="col-md-12">
                          <ul class="list-group">
                              <li class="list-group-item list-group-item-success">Calificaciones <span class="badge">0</span></li>
                              <li class="list-group-item list-group-item-default">Tú calificacion <span class="badge">0</span></li>
                              <li class="list-group-item list-group-item-danger">Calificación general <span class="badge">0</span></li>
                          </ul>
                              <button class="btn btn-lg btn-block btn-success" type="submit">calificar</button>
                      </div>
                  </div>
               </div>    
            </div>
        </form>
      </div>

@endforeach
