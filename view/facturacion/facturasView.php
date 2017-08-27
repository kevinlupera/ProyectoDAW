<div class="container" >
    <?php
        $factura=new Factura();
        echo "<table  class='table table-bordered'><tr id=detalles class='info'><th>#Factura-->(Click Detalles)</th><th>Persona</th><th>Fecha</th></tr>";
        foreach ($this->facturas as $factura){
            $persona=$this->personasModel->buscarPersonaxId($factura->getPersona_id());
            echo "<tr class='success'>";
            echo "<td id=link><a href='?c=facturas&a=listarDetalles&p=".$factura->getFactura_id()."'>".$factura->getFactura_id()."</a></td>";
            echo "<td>".$persona->getNombre()."</td>";
            echo "<td>".$factura->getFecha()."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</div>



