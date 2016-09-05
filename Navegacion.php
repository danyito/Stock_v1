 <!-- ///////////////////////// Fixed navbar /////////////////////////  -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Sistema de Stock</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
              <?php
               if (isset($activar) && $activar == '1')
                {
                   ?>
              <li class="active"><a href="clientes.html">Clientes</a></li>
                    <?php
                }
               else
               {
                   ?>
                <li><a href="clientes.html">Clientes</a></li>
                    <?php
               }
              ?>
              
            <li><a href="agenda.html">Agenda <span class="badge">42</span></a></li>
            <li><a href="tareas.html">Tareas <span class="badge">42</span></a></li>
            <li><a href="marketing.html">Marketing</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Configuración <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>

          <!-- cotizaciones -->
          <div id="carousel-example-generic" class="carousel slide " data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <!-- ---------- -->
              <div class="item active">
                  <div class="col">
                    Cotización <strong>Dóla US</strong>
                  </div>
                  <div class="col">
                    <img src="images/flag_us.png" height="27" width="32" alt="">
                  </div>
                  <div class="col">
                    Compra <strong>4000</strong>
                  </div>
                  <div class="col">
                    Venta <strong>4000</strong>
                  </div>
              </div>
              <!-- ---------- -->
              <!-- ---------- -->
              <div class="item">
                  <div class="col">
                    Cotización <strong>Euro UE</strong>
                  </div>
                  <div class="col">
                    <img src="images/flag_eu.png" height="27" width="32" alt="">
                  </div>
                  <div class="col">
                    Compra <strong>4000</strong>
                  </div>
                  <div class="col">
                    Venta <strong>4000</strong>
                  </div>
              </div>
              <!-- ---------- -->
              <!-- ---------- -->
              <div class="item">
                  <div class="col">
                    Cotización <strong>Real BR</strong>
                  </div>
                  <div class="col">
                    <img src="images/flag_br.png" height="27" width="32" alt="">
                  </div>
                  <div class="col">
                    Compra <strong>4000</strong>
                  </div>
                  <div class="col">
                    Venta <strong>4000</strong>
                  </div>
              </div>
              <!-- ---------- -->
              <!-- ---------- -->
              <div class="item">
                  <div class="col">
                    Cotización <strong>Peso AR</strong>
                  </div>
                  <div class="col">
                    <img src="images/flag_ar.png" height="27" width="32" alt="">
                  </div>
                  <div class="col">
                    Compra <strong>4000</strong>
                  </div>
                  <div class="col">
                    Venta <strong>4000</strong>
                  </div>
              </div>
              <!-- ---------- -->
            </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!-- cotizaciones -->

        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- ///////////////////////// Fixed navbar /////////////////////////  -->
