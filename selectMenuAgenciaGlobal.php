<?php
                    $result = $conn->query("select nombre_agencia from agencia");
                    if($conn->error){
                        die("error en la consulta " . $conn->error);
                    }
                    while($row = $result->fetch_assoc())
                    { 
                        ?>
                            <option value="<?php echo $row["nombre_agencia"]?>"> <?php echo utf8_encode($row["nombre_agencia"])?> </option>
<?php }?>