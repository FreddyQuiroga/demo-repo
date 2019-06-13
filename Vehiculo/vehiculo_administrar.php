<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-warning">Lista de Vehículos</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>N°</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Color</th>
            <th>Placa</th>
            <th>Año de Fabricación</th>
            <th>Modificar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php $indice=1 ;
      foreach ($vehiculo->result() as $row) {
      ?>
      <tr>
        <td><?php echo $indice;?></td>
        <td><?php echo $row->marca;?></td>
        <td><?php echo $row->modelo;?></td>
        <td><?php echo $row->color;?></td>
        <td><?php echo $row->placa;?></td>
        <td><?php echo $row->anioFabricacion;?></td>
       
        
        

        <td>
          <?php echo form_open_multipart('vehiculo/modificar');?>
            <input type="hidden" name="idVehiculo" value="<?php echo $row->idVehiculo;?>">
            
           
            <button type="submit" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-50">
                      <i class="fas fa-exclamation-triangle"></i>
                    </span>
                    <span class="text">Modificar</span></button>
          <?php echo form_close(); ?>
        </td>
        <td>
          <?php echo form_open_multipart('vehiculo/eliminardb');?>
            <input type="hidden" name="idVehiculo" value="<?php echo $row->idVehiculo;?>">
            
                  
                
                  
            <button type="submit" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                      <i class="fas fa-trash"></i>
                    </span>
                    <span class="text">Eliminar</span></button>
          <?php echo form_close(); ?>
        </td>

      <?php
      $indice++;
      
      }
      ?>
      
     
    
    
        </tbody>
         
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->