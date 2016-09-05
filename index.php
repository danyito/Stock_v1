<?php
    $encabezado = 'Tablero';
    include 'cabecera.php';
?>
        <div id="mainmain">
            <a href="ventas.php"><i class="icon-shopping-cart icon-2x"></i><br> Ventas</a>               
            <a href="products.php"><i class="icon-list-alt icon-2x"></i><br> Productos</a>      
            <a href="clientes.php"><i class="icon-group icon-2x"></i><br> Clientes</a>     
            <a href="supplier.php"><i class="icon-group icon-2x"></i><br> Proveedores</a>
            <a href="salesreport.php?d1=0&amp;d2=0"><i class="icon-bar-chart icon-2x"></i><br> Reporte de Ventas</a>
            <a href="../index.php"><font color="red"><i class="icon-off icon-2x"></i></font><br> Salir</a> 
            <div class="clearfix"></div>
        </div>

<?php
    include 'pie.php';
?>