
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<br><br>
<?php
    if ($this->session->userdata('is_logged_in')){
      echo '<h4 align="right">';
      echo '<small>';
      echo 'Bienvenido: <strong>'.$this->session->userdata('NOMBRE').' '.$this->session->userdata('APELLIDOS').'</strong>&nbsp;|&nbsp;';
      echo 'Tipo Usuario: <strong>'.$this->session->userdata('TIPOUSUARIO').'</strong>&nbsp;|&nbsp;';
      echo anchor("login/CerrarSesion/", "Salir").'&nbsp;&nbsp;</small></h4>';
      echo '<hr/>';
      echo '<p align="right">';
      echo '<table align="right">';
      echo '<tr>';
     foreach($this->session->userdata('Permisos') as $CrearMenu4){
                            
                            if($CrearMenu4["ID"]=="Error"){
                                echo '<td><font color="blue">Sin Permisos para el Ver Menu. Solicita los Permisos con un Administrador</font></td>';
                             }else{   
                                   


                                  echo  
                                  
                                  '<a href="'.base_url().'index.php'.$CrearMenu4["URL"].'">'.$CrearMenu4["DESCRIPCION"]."</a></td>";
                                  echo '<td></td>';

                            }
      }
            echo '</tr>';
      echo '</table>';   

      
      
      echo '</p>';
      echo '<hr/>'; 
    
    }else{
      echo '<hr/>';
    }
    
   ?>

  
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Inicio</h3>

              <p>Retornar menu principal</p>
            </div>
            <div class="icon">
              <i class="fa fa-home"></i>
            </div>
            <a href="http://localhost/ProyectoDocfis/index.php/" class="small-box-footer">Acceder <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-xs-6">


          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>525</h3>

              <p>Gestionar Usuarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            
            <a href="http://localhost/ProyectoDocfis/index.php/usuarios" type="button" data-toggle="" class="small-box-footer">Acceder  <i class="fa fa-arrow-circle-right" id="btn"></i></a>
          </div>
        </div>

          
      
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Gestionar Funcionarios</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="http://localhost/ProyectoDocfis/index.php/funcionarios" class="small-box-footer">Acceder  <i class="fa fa-arrow-circle-right" id="btn2"></i></a>
          </div>
        </div>
        


        
        <!-- ./col -->
      
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Historiales Laborales</p>
            </div>
            <div class="icon">
              <i class="fa fa-database"></i>
            </div>
            <a href="#" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

</div>
      

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-orange">
            <div class="inner">
              <h3>#</h3>

              <p>Gestionar Tecnicos</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="http://localhost/ProyectoDocfis/index.php/tecnicos" class="small-box-footer">Acceder<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div></section>
      
    
  



 