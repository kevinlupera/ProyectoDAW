

<div class="contenedorProductos">
    <table border="2">                     
        <tr>
                    <?php 
                        $producto = new Producto();
                        $x=1;
                        foreach($this->productos as  $producto){                   
                    ?>  
                            <td>
                                <div class='sensors' align='center'>
                                <?php
                                    echo "<img src='imagenes/".$producto->getPro_img()."' alt='".$producto->getPro_nombre()."' style='width:200px;height:200px; align-content: center;'>";
                                    echo "<h4>".$producto->getPro_nombre()."</h4>";
                                    echo "<p>".$producto->getPro_descripcion()."<br><b>".$producto->getPro_precio()."</b></p>";
                                ?>
                      
                                </div>
                                <div id='contenedor_anadir_cesta'>
                                    <form method='post' action='?c=productos&a=addToCesta' id='form_anadir_cesta'>
                                <?php
                                    
                                        echo "<input type='hidden' name='idproducto' value='".$producto->getProducto_id()."'>";
                                        echo "<input type='hidden' name='idusuario' value='".$_SESSION['usuario_id']."'>";
                                        echo "<input type='hidden' name='precio' value='".$producto->getPro_precio()."'>";
                                        echo "<label for='cantidad'>cantidad</label>";
                                        echo "<input type='number' id='b' name='cantidad' value='1' min='1' max='10'>";
                                        echo "<input type='submit' value='añadir a cesta' id='bt_submit' name='addCest'>";
                                    
                                ?>
                                    </form>
                                </div>
                            </td>
                        
                        <?php 
                            if(($x % 3 )==0 ){
                                echo "</tr>";
                                echo "<tr>";          
                            }
                            $x=$x+1;
                        }              
                    ?>
        
    </table>
</div>
