
<?php
    $encabezado = 'Buscar clientes';
    $botonHeader= 'Nuevo Cliente';
    include 'cabecera.php';
    $activar= 1;
?>

 <!-- +++++++ filtro +++++++ -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <form>
            <div class="row">

              <div class="form-group col-md-2">
                <label for="Nro. cédula">Nro. cédula</label>
                <input type="text" class="form-control" id="Nro. cédula">
              </div>

              <div class="form-group col-md-2">
                <label for="RUC">RUC</label>
                <input type="text" class="form-control" id="RUC">
              </div>

              <div class="form-group col-md-2">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" id="Nombre">
              </div>

              <div class="form-group col-md-2">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" id="Apellido">
              </div>

              <div class="form-group col-md-1">
                <label for="Chasis">Chasis</label>
                <input type="text" class="form-control" id="Chasis">
              </div>

              <div class="form-group col-md-2">
                <label for="Nro. Control interno">Nro. Control interno</label>
                <input type="text" class="form-control" id="Nro. Control interno">
              </div>

              <div class="form-group col-md-1">
                <button type="submit" class="btn btn-primary btn-buscar">
                   
                    Buscar
                </button>
              </div>

            </div>
          </form>

        </div>
      </div>
      <!-- +++++++ filtro +++++++ -->

      <div class="table-responsive">
        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>#Cédula</th>
              <th>RUC</th>
              <th>Nombres</th>
              <th>Apellidos</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right">
                  <a href="clientes_perfil.html" class="btn btn btn-warning btn-xs" role="button">
                      <i class="icon-edit"></i>
                      Ver detalles
                  </a>
                  <a href="#" id="15" class="delbutton btn btn-danger btn-xs" title="Click To Delete">
                          <i class="icon-trash"></i> 
                          Borrar
                  </a>
              </td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right">
                  <a href="clientes_perfil.html" class="btn btn btn-warning btn-xs" role="button">
                      <i class="icon-edit"></i>
                      Ver detalles
                  </a>
                  <a href="#" id="15" class="delbutton btn btn-danger btn-xs" title="Click To Delete">
                          <i class="icon-trash"></i> 
                          Borrar
                  </a>
              </td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
            <tr>
              <td><strong>9982399</strong></td>
              <td>9982399</td>
              <td>Nombre del usuario</td>
              <td>Apellido del usuario</td>
              <td class="text-right"><a href="clientes_perfil.html" class="btn btn-default btn-xs" role="button">Ver detalles</a></td>
            </tr>
          </tbody>
        </table>
      </div>

      
<?php
    include 'paginacion.php';
    include 'pie.php';
?>
