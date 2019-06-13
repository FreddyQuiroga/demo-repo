<div class="container">
		
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
 
	   
		 <div class="col-md-7">
		 <h3 ><span class="fas fa-edit"></span> Registrar Usuario</h3>
			<form action="<?=base_url()?>index.php/vehiculo/insertardb" class="form-horizontal" method="POST" enctype="multipart/form-data">
				 
			 
			  
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Nombre Usuario</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="marca" name="usuario"  required name="titulo">
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Password</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="modelo" name="password"  required name="titulo">
				</div>
              </div>
              <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Tipo</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="color" name="tipo"  required name="titulo">
				</div>

				<select class="form-control">
        <option value="+47">Norge (+47)</option>
        <option value="+46">Sverige (+46)</option>
        <option value="+45">Danmark (+45)</option>
      </select>

			
              </div>	
         	
			  
			  <div class="form-group">
			  <div id='loader'></div>
			  <div class='outer_div'></div>
				<div class="col-sm-offset-3 col-sm-9">
				  <button type="submit" class="btn btn-warning">Registrar datos</button>
				</div>
			  </div>
			
			
			
			
		</div>
		<div class="col-md-5">
		 <h3 ><span class="	fas fa-file-image"></span> Fotografia</h3>
		 
		
		 
			<div class="form-group">
				
				<div class="col-sm-12">
				
				 
				 <div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new thumbnail" style="max-width: 100%;" >
									  <img class="img-rounded" src="<?=base_url()?>/bootstrap/images/taxilogo.png" style="max-width: 250px; max-height: 350px;"/>
								  </div>
								  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 350px; max-height: 250px;"></div>
								  <div>
									
									<span class="btn btn-warning btn-file"><span class="fileinput-new" name="newimage">Selecciona una imagen</span>
									<span class="fileinput-exists" onclick="upload_image();">Cambiar imagen</span><input type="file" name="fileToUpload"  id="fileToUpload" required onchange="upload_image();" ></span>
									<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Cancelar</a>
								  </div>
					</div>
					
					
				</div>
				
			  </div>



				
         </form>

         
		</div>

    </div> 
    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>