<?php
session_start();
if($_SESSION['us_tipo']==1){
    
include_once 'layouts/header.php';

?>
<title>AdminLTE 3 | datos personales</title>
<?php

include_once 'layouts/nav.php';

?>




<!-- Modal -->
<div class="modal fade" id="cambiocontra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">cambiar password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="text-center">
           <img src="../imagenes/avatar04.png" class="profile-user-img  img-circle">
        </div>
        <div class="text-center">
          <b>
          <?php
          echo $_SESSION['nombre_us'];
          ?>
          </b>
        </div>
        <form id="form-pass">
         <dib class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
           </div>
             <input id="oldpass" type="password" class="form-control" placeholder="ingrese password actual">
          </dib>

          <dib class="input-group mb-3">
           <div class="input-group-prepend">
             <span class="input-group-text"><i class="fas fa-lock"></i></span>
           </div>
             <input id="newpass" type="text" class="form-control" placeholder="ingrese password nuevo">
          </dib>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn bg-gradient-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>
      
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="card-title">Editar Datos Personales</h1>
                        </div>
                        <!-- <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Datos Personales</li>
                            </ol>
                        </div> -->
                    </div>
                </div>
              
                <!-- /.container-fluid -->
            </section>
      <section>
      
      <div class="content">
            <div class="container-fluid">
               <div class="row">
               <!-- datos de la persona -->
                   <div class="col-md-3">
                     <div class="card card-success card-outline">
                       <div class="card-body box-profile">
                         <div class="text-centar">
                           <img src="../imagenes/avatar04.png" class="profile-user-img img-fluid img-circle d-block">
                         </div>
                          <input id="id_usuario" type="hidden" value="<?php echo $_SESSION['usuario']?>">
                           <h3 id="nombre_us" class="profile-username text-center text-success">nombre</h3>   
                          <p id="apellidos_us" class="text-muted text-center">apellido
                          </p>
                          <ul class="list-group list-group-unbordered mb-3 text-left">
                          <li class="list-group-item">
                          <b style="color:#0b7300">EDAD</b><a id="edad" class="float-right">12</a>              
                          </li>
                          <li class="list-group-item">
                          <b style="color:#0b7300">DNI</b><a id="dni_us" class="float-right">12</a>              
                          </li>
                          <li class="list-group-item">
                          <b style="color:#0b7300">TIPO USUARIO</b>
                          <span id="us_tipo" class="float-right badge badge-primary">administrador</span>            
                          </li>
                          <button data-toggle="modal" data-target="#cambiocontra" type="button" class="btn btn-block btn-outline-warning btn-sm">cambiar password</button>
                          </ul>
                        </div>
                        </div>

                        <!-- mi datos  -->
                            <div class="card card-success">
                             <div class="card-header">
                             <h3 class="card-title">SOLO MI</h3>
                            </div>                        
                            <div class="card-body">
                             <strong style="color:#0b7300">
                             <i class="fas fa-phone ar-1">Tlf</i>
                            </strong>
                            <p id="telefono_us" class="text-muted">0998098</p>
                            <strong style="color:#0b7300">
                             <i class="fas fa-map-marker-alt ar-1">Residencia</i>
                            </strong>
                            <p id="residencia_us" class="text-muted">hxxhxhbx</p>
                            <strong style="color:#0b7300">
                              <i class="fas fa-at">Correo</i>
                            </strong>
                            <p id="correo_us" class="text-muted">hxhx</p>
                            <strong style="color:#0b7300">
                             <i class="fas fa-smile-wink">Sexo</i>
                            </strong>
                            <p id="sexo_us" class="text-muted">hxhx</p>
                            <strong style="color:#0b7300">
                             <i class="fas fa-user-edit">Informacion Adicional</i>
                            </strong>
                            <p id="adicional_us" class="text-muted">jxijhxjx</p>
                            <button class="edit btn btn-block bg-gradient-danger">Editar</button>
                            </div>

                            <div class="card-footer">
                            </div>
                        </div>





                 </div>
                 <!-- ingresar datos -->
                 <div class="col-md-9">
                  <div class="card-success">
                    <div class="card-header">
                     <h1 class="card-title">Editar Datos Personales</h1>
                    </div>

                    <div class="card-body">
                    <div class="alert alert-success text-center" id="editado" style='display:none;'>
                    <span><i class="fas fa-check"></i>Editado</span>
                    </div>
                     <form id="from-usuario" class="form-horizontal">
                        <div class="form-group row">
                        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>                 
                         <div class="col-sm-10">
                          <input type="number" id="telefono" class="form-control">
                         </div>
                        </div>
                        <div class="form-group row">
                         <label for="residencia" class="col-sm-2 col-form-label">Residencia</label>                 
                         <div class="col-sm-10">
                          <input type="text" id="residencia" class="form-control">
                         </div>
                        </div>

                        <div class="form-group row">
                         <label for="correo" class="col-sm-2 col-form-label">Correo</label>                 
                         <div class="col-sm-10">
                          <input type="text" id="correo" class="form-control">
                         </div>
                        </div>

                        <div class="form-group row">
                         <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>                 
                         <div class="col-sm-10">
                          <input type="" id="sexo" class="form-control">
                         </div>
                        </div>

                        <div class="form-group row">
                         <label for="adicional" class="col-sm-2 col-form-label">Adicional</label>                 
                         <div class="col-sm-10">
                         <textarea class="form-control" id="adicional" cols="30" rows="10"></textarea>
                         </div>
                        </div>
                          <div class="from-froup row">
                           <div class="offset-sm-2 col-sm-10 float-right">
                            <button class="btn btn-block btn-outline-success">Guardar</button>
                           </div>
                          </div>
                     </form>
                    </div>

                    <div class="card-footer">
                    <H6>Cuidado con ingresar datos incorrectos</H6>
                    </div>
                   </div>
                 
                 </div>
            </div>
         </div>            
      </div>
    </section>
    </div>
            
        
<?php
include_once 'layouts/footer.php';
}
else{
    header('Location:../vista/loggin.php');
}
?>

<script src="../js/usuario.js"></script>