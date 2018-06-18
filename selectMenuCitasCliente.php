<?php
                    $result = $conn->query("select id, nombre from clientes");
                    if($conn->error){
                        die("error en la consulta " . $conn->error);
                    }
                    while($row = $result->fetch_assoc())
                    { 
                        ?>
                            <option value=<?php echo $row["id"]?>> <?php echo $row["nombre"]?> </option>
<?php }?>