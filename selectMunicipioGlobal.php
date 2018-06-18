<?php
                    require "funciones.php";
                    $conn = conectarBD();
                    $result = $conn->query("select cve_mun, nom_mun from municipio where cve_ent = '".$_POST["country"]."'");
                    if($conn->error){
                        die("error en la consulta ");
                    }
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                            <?php echo "<option value='".utf8_encode($row["cve_mun"])."'> ".utf8_encode($row["nom_mun"])."</option>" ?>
              <?php }?>