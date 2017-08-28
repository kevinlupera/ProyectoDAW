

<div class="contenedorProductos">
    <table border="2" class="table table-bordered">                     
        <tr class="success">
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
                                ?>
                                        <input type='hidden' name='idusuario' value='<?php if(isset($_SESSION['usuario_id'])){echo $_SESSION['usuario_id']; } ?>'>
                                <?php
                                        echo "<input type='hidden' name='precio' value='".$producto->getPro_precio()."'>";
                                        echo "<label for='cantidad'>cantidad</label>";
                                        echo "<input type='number' class='form-control' id='b' name='cantidad' value='1' min='1' max='10'>";
                                ?>
                                        <input type='submit' class='btn btn-default' value='añadir a cesta' id='bt_submit' name='addCest' <?php if(!isset($_SESSION['usuario_id'])){echo "disabled"; } ?>>
                                    
                                
                                    </form>
                                </div>
                            </td>
                        
                        <?php 
                            if(($x % 3 )==0 ){
                                echo "</tr >";
                                echo "<tr class='success'>";          
                            }
                            $x=$x+1;
                        }              
                    ?>
        
    </table>
</div>
