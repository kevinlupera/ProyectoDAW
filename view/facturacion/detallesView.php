

<div class="container">
    <?php
        $detalle=new Detalle();
        echo "<table class='table table-bordered'><tr id=detalles class='info'><th>#Factura<--(Click)</th><th>#Detalle</th><th>Producto</th><th>Cantidad</th><th>Precio</th></tr>";
        $total=0;
        foreach ($this->detalles as $detalle){
            $producto=$this->productoModel->obtenerProductosxId($detalle->getId_producto());
            echo "<tr class='success'>";
            echo "<td id=link><a href='?c=facturas&a=listarFacturas'>".$detalle->getFactura_id()."</a></td>";
            echo "<td>".$detalle->getDetalle_id()."</td>";    
            echo "<td>".$producto->getPro_nombre()."</td>";
            echo "<td>".$detalle->getCantidad()."</td>";
            echo "<td>$".$detalle->getPrecio()."</td>";
            echo "</tr>";
            $subtotal=$detalle->getPrecio()*$detalle->getCantidad();
            $total=$total+$subtotal;
        }
        echo "<tr id='total' class='danger'>";
        echo '<th>Total:</th>';
        echo '<th>$'.$total.'</th>';
        echo '</tr>';
        echo "</table>";
    ?>
</div>
