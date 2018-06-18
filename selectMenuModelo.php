<?php
                    $result = $conn->query("select modelo from autos");
                    if($conn->error){
                        die("error en la consulta " . $conn->error);
                    }
                    while($row = $result->fetch_assoc())
                    { 
                        ?>
                            <option value="<?php echo $row["modelo"]?>"> <?php echo utf8_encode($row["modelo"])?> </option>
<?php }?>