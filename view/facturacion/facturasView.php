<div >
    <?php
        $factura=new Factura();
        echo "<table class='facturas'><tr id=detalles><td>#Factura-->(Click Detalles)</td><td>Persona</td><td>Fecha</td></tr>";
        foreach ($this->facturas as $factura){
            $persona=$this->personasModel->buscarPersonaxId($factura->getPersona_id());
            echo "<tr>";
            echo "<td id=link><a href='?c=facturas&a=listarDetalles&p=".$factura->getFactura_id()."'>".$factura->getFactura_id()."</a></td>";
            echo "<td>".$persona->getNombre()."</td>";
            echo "<td>".$factura->getFecha()."</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</div>



