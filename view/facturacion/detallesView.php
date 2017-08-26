

<div>
    <?php
        $detalle=new Detalle();
        echo "<table class='facturas'><tr id=detalles><td>#Factura<--(Click)</td><td>#Detalle</td><td>Producto</td><td>Cantidad</td><td>Precio</td></tr>";
        $total=0;
        foreach ($this->detalles as $detalle){
            $producto=$this->productoModel->obtenerProductosxId($detalle->getId_producto());
            echo "<tr>";
            echo "<td id=link><a href='?c=facturas&a=listarFacturas'>".$detalle->getFactura_id()."</a></td>";
            echo "<td>".$detalle->getDetalle_id()."</td>";    
            echo "<td>".$producto->getPro_nombre()."</td>";
            echo "<td>".$detalle->getCantidad()."</td>";
            echo "<td>$".$detalle->getPrecio()."</td>";
            echo "</tr>";
            $subtotal=$detalle->getPrecio()*$detalle->getCantidad();
            $total=$total+$subtotal;
        }
        echo '<tr id=total>';
        echo '<td>Total:</td>';
        echo '<td>$'.$total.'</td>';
        echo '</tr>';
        echo "</table>";
    ?>
</div>
