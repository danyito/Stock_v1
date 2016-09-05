
<?php
    $encabezado = 'Ventas';
    include 'cabecera.php';
?>

<form action="http://localhost:8090/POS_platea21/main/incoming.php" method="post" >

    <input type="hidden" name="pt" value="cash" />
    <input type="hidden" name="invoice" value="RS-02222033" />
    <div class="row">
        <select name="product" style="width:650px;height: 45px" class="chzn-select" required>
            <option>Seleccione un producto</option>
            <option value="58">Nombre Marca - Nombre Generico -  Categoria / Descripcion | Expira : 2016-11-25</option>
            <option value="60">Iphone - Iphone 5 -  Celular | Expira : 2018-01-01</option>
        </select>
   
    
   
        <input type="number" name="qty" value="1" min="1" placeholder="Qty" autocomplete="off" style="width: 68px; height:45px; margin-right: 4px; font-size:15px;" / required>
               <input type="hidden" name="discount" value="" autocomplete="off" style="width: 68px; height:30px; padding-top:6px; padding-bottom: 4px; margin-right: 4px; font-size:15px;" />
        <input type="hidden" name="date" value="08/29/16" />
        <Button type="submit" class="btn btn-info" style="width: 123px; height:35px; margin-top:-5px;" /><i class="icon-plus-sign icon-large"></i> Agregar</button>
    </div>
    <br>
</form>
<div class="row">
<table class="table table-bordered" id="resultTable" data-responsive="table">
    <thead>
        <tr>
            <th> Nombre Producto </th>
            <th> Nombre Generico </th>
            <th> Categoria / Descripcion </th>
            <th> Precio </th>
            <th> Cantidad </th>
            <th> Monto </th>
            <th> Ganancia </th>
            <th> Accion </th>
        </tr>
    </thead>
    <tbody>

        <tr>
            <th> </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <th>  </th>
            <td> Monto Total: </td>
            <td> Ganancia Total: </td>
            <th>  </th>
        </tr>
        <tr>
            <th colspan="5"><strong style="font-size: 12px; color: #222222;">Total:</strong></th>
            <td colspan="1"><strong style="font-size: 12px; color: #222222;">
                    0.00				</strong></td>
            <td colspan="1"><strong style="font-size: 12px; color: #222222;">
                    0.00		
            </td>
            <th></th>
        </tr>

    </tbody>
</table><br>
</div>
<a rel="facebox" href="checkout85f2.html?pt=cash&amp;invoice=RS-02222033&amp;total=&amp;totalprof=&amp;cashier=Admin"><button class="btn btn-success btn-large btn-block"><i class="icon icon-save icon-large"></i> Guardar</button></a>
<?php
    include 'pie.php';
?>
    
