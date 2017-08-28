<div class="container">
    <?php
        echo '<h1>Total de ventas</h1>';
        echo "<table class='table table-bordered'><tr id=detalles class='info'><th>#Facturas</th><th>#Ordenes</th><th>Total</th></tr>";
            echo "<tr class='success'>";
            $rep= new Reportes();
            $rep= $this->reportes;
            echo "<td>".$rep->getFacturas()."</td>";    
            echo "<td>".$rep->getOrdenes()."</td>";
            echo "<td>$".$rep->getTotal()."</td>";
            echo "</tr>";
        echo "</table>";
    ?>
</div>

<div class="container">
    <?php
        echo '<h1>Reporte de Inventario</h1>';
        echo "<table class='table table-bordered'><tr id=detalles class='info'><th>#Codigo del producto</th><th>Descripcion</th><th>#Stock</th></tr>";
            $stock= new StockProductos();    
            foreach ($this->result as $stock){
                echo "<tr class='success'>";
                echo "<td>".$stock->getProducto_id()."</td>";    
                echo "<td>".$stock->getPro_descripcion()."</td>";
                echo "<td>".$stock->getPro_stock()."</td>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
</div>