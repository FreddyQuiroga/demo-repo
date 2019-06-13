<div class="container">
		
      <!-- Main component for a primary marketing message or call to action -->
      <div class="row">
 
	   
		 <div class="col-md-7">
         <h3 ><span class="fas fa-edit"></span> Modificar Vehículo</h3>
         <?php 
      foreach ($vehiculo->result() as $row) {
      ?>
      
          
			<form action="<?=base_url()?>index.php/vehiculo/modificardb" class="form-horizontal" method="POST" enctype="multipart/form-data">
                
            
            
				  <input type="hidden" class="form-control" id="idVehiculo" name="idVehiculo" value="<?php echo $row->idVehiculo; ?>" required name="titulo">
				  
				
			 
			  
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Marca</label>
				<div class="col-sm-9">
				  <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row->marca; ?>" required name="titulo">
				  
				</div>
			  </div>
			  
			  <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label" >Modelo</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row->modelo; ?>  " required name="titulo">
				</div>
              </div>
              <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Color</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="color" name="color" value="<?php echo $row->color; ?> " required name="titulo">
				</div>
              </div>	
              <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Placa</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row->placa; ?> " required name="titulo">
				</div>
              </div>	
              <div class="form-group">
				<label for="titulo" class="col-sm-3 control-label">Año de Fabricación</label>
				<div class="col-sm-9">
                <input type="text" class="form-control" id="fabricacion" name="fabricacion" value="<?php echo $row->anioFabricacion; ?>" required name="titulo">
				</div>
              </div>	
              
			  
			  
			  
			
			 
			  
			  
			  <div class="form-group">
			  <div id='loader'></div>
			  <div class='outer_div'></div>
				<div class="col-sm-offset-3 col-sm-9">
				  <button type="submit" class="btn btn-warning">Modificar datos</button>
				</div>
			  </div>
		
			
			
			
		</div>
		<div class="col-md-5">
		 <h3 ><span class="	fas fa-file-image"></span> Fotografia</h3>
		 
		
		 
			<div class="form-group">
				
				<div class="col-sm-12">
				
				 
				 <div class="fileinput fileinput-new" data-provides="fileinput">
								  <div class="fileinput-new thumbnail" style="max-width: 100%;" >
									  <img class="img-rounded" src="<?=base_url()?>/uploads/imagenes_vehiculo/<?php echo $row->imagen;?> " style="max-width: 250px; max-height: 350px;" />
								  </div>
								  <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 250px; max-height: 350px;">
										
										
									</div>
								  <div>
									<span class="btn btn-warning btn-file"><span class="fileinput-new">Selecciona una imagen</span>
									<span class="fileinput-exists" onclick="upload_image();">Cambiar imagen</span><input type="file" value="<?php echo $row->imagen;?> " name="fileToUpload" id="fileToUpload" required onchange="upload_image();"></span>
									<a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Cancelar</a>
								  </div>
					</div>
				
					
				</div>
				
			  </div>
              
	

	  
			
			  
			 
			  
			  
         </form>
         
    </div> 
    <?php
      
      
      }
      ?>
    </div><!-- /container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>