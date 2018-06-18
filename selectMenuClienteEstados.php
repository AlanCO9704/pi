<?php
                    echo "select cve_ent, nom_ent from entidad";
                    $result = $conn->query("select cve_ent, nom_ent from entidad");
                    if($conn->error){
                        die("error en la consulta " . $conn->error);
                    }
                    while($row = $result->fetch_assoc())
                    { 
                        ?>
                            <option value="<?php echo $row["cve_ent"]?>"> <?php echo utf8_encode($row["nom_ent"])?> </option>
<?php }?>