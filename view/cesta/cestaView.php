     
        <div class="contenedor">
            <section id="contenedorCesta">
                <div id="infoProducto">
                   
                    <h3 id="descripcion">Descripcion</h3>
                    <h3 id="cantidad">Cantidad</h3>
                    <h3 id="precio">Precio</h3>
                    <h3 id="total">Total</h3>
                </div>
                <?php
                    $T_total=0.00;
                    $T_cantidad=0;
                    $x=0;
                    foreach ($this->ordenes as $orden) {
                        
                        $producto=$this->productoModel->obtenerProductosxId($orden->getProducto_id());
                        echo "<div class='productoCesta' id='producto".($x+1)."'>";
                        echo "<div class='productoImg'>";
                            echo "<a href='#'><img src='imagenes/".$producto->getPro_img()."' alt='".$producto->getPro_nombre()."' style='height:140px;'></a>";
                            echo "<a href='#' class='productoLink'>".$producto->getPro_nombre()."</a>";
                        echo "</div>";
                        echo "<div class='productoCantidad'>";
                            echo "<form action='' class='formCantidad'>";
                                echo "<span class='valor'>".$orden->getCantidad()."</span>";
                                echo "<span class='unidad'> Pieza<span/>";
                            echo "</form>";
                        echo "</div>";
                        echo "<div class='productoPrecio'>";
                            echo "<span class='valor'>$".$orden->getPrecio()."<span/>";
                            echo "<span class='separador'>/<span/>";
                            echo "<span class='unidad'>Pieza<span/>";
                        echo "</div>";
                        echo "<div class='productoTotal'>";
                            echo "<span class='valor'>".$orden->getTotal()."<span/>";
                            echo "<span class='unidad'>$<span/>";
                        echo "</div>";
                            echo "<div class='btQuitar'>";
                                echo "<form method='post' action='?c=cesta&a=deleteOrden' id='formDel'>";
                                    echo "<input type='hidden' name='idordenc' value='".$orden->getOrden_id()."'>";                
                                    echo "<input type='submit' value='quitar'  name='del'>";
                                echo "</form>";
                            echo "</div>";
                        echo "</div>"; 
                        $T_total = $T_total + $orden->getTotal();
                        $T_cantidad = $T_cantidad + $orden->getCantidad();
                        $x=$x+1;
                    }
                
                ?>
                <div id="totalProductos">
                    <h3 id="etiquetatotal">Total</h3>
                    <span id="cantidadProductosTotal"><?php echo $T_cantidad." Items" ?> </span>
                    <span id="montoTotal"><?php echo "$".$T_total ?></span>
                </div>
            </section>     
        </div>