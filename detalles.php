
<?php

    include('conexion.php');

    $salida = "";

    //Tabla farmacia Similares//
    $query = "SELECT * FROM similares ORDER BY cod_medicamento";

    if(isset($_POST['consulta'])){
        $q = $link -> real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM similares WHERE
            Marca LIKE '%".$q."%' OR
            Activos LIKE '%".$q."%' OR
            Cantidad_Activos LIKE '%".$q."%' OR
            Presentación LIKE '%".$q."%' OR
            Patente_generico LIKE '%".$q."%' OR
            Administracion LIKE '%".$q."%' OR
            Cantidad LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);

            if ($resultado -> num_rows > 0){

                $salida.="
                <table class = 'w3-table w3-striped w3-green w3-border-black'>
                    <caption class = w3-teal>Farmacia Union</caption>
                    <caption class = w3-teal><a href='https://www.google.com.mx/maps/place/Farmacias+Uni%C3%B3n+ITESCO/@18.1411631,-94.5244448,16.3z/data=!4m5!3m4!1s0x85c22651dfb0090f:0x9d2c70f98bbf37d4!8m2!3d18.1390419!4d-94.5240001?hl=es&authuser=0' target='_blank' style='text-decoration: none'> Dirección: Carr. a Barrillas, Lomas de Barrillas.</a</caption>
                    <caption class = w3-teal> Telefono: 921 216 0286</caption>
                    <thead>
                        <tr class='w3-teal'>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad de Activos</td>
                            <td>Presentación</td>
                            <td>Patente/Genérico</td>
                            <td>Administración</td>
                            <td>Cantidad</td>
                            <td>Precio/U</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr class = w3-white >
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Cantidad'].'</td>
                            <td>'.$fila['Precio/U'].'</td>
                        </tr>';
                     }


            $salida.="</tbody></table><br>";
              

        } else {
            $salida.="";
    }

    //Tabla farmacia Union//
     $query = "SELECT * FROM farmaunion ORDER BY cod_medicamento";

    if(isset($_POST['consulta'])){
        $q = $link -> real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM farmaunion WHERE
            Marca LIKE '%".$q."%' OR
            Activos LIKE '%".$q."%' OR
            Cantidad_Activos LIKE '%".$q."%' OR
            Presentación LIKE '%".$q."%' OR
            Patente_generico LIKE '%".$q."%' OR
            Administracion LIKE '%".$q."%' OR
            Cantidad LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);


            if ($resultado -> num_rows > 0){

                $salida.="
                <table class = 'w3-table w3-striped w3-green'>
                <caption class = w3-teal>Farmacia Similares</caption>
                <caption class =w3-teal><a href='https://www.google.com.mx/maps/place/Farmacias+Similares/@18.1394702,-94.5261228,17.61z/data=!4m5!3m4!1s0x85e98506d8464a53:0xb96410079bb1c74e!8m2!3d18.14032!4d-94.5270906?hl=es&authuser=0' target='_blank' style='text-decoration: none'>
                    Dirección: Carr. a Barrillas 112</a></caption>
                <caption class = w3-teal>Teléfono: 921 216 4063</caption>
                    <thead>
                        <tr class='w3-teal'>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad de Activos</td>
                            <td>Presentación</td>
                            <td>Patente/Genérico</td>
                            <td>Administración</td>
                            <td>Cantidad</td>
                            <td>Precio/U</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr class = w3-white >
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Cantidad'].'</td>
                            <td>'.$fila['Precio/U'].'</td>
                        </tr>';
                     }
                     
            $salida.="</tbody></table><br> ";
            
        } else {
            $salida.="";
    }

    //Farmacia YZA//
         $query = "SELECT * FROM yza ORDER BY cod_medicamento";

    if(isset($_POST['consulta'])){
        $q = $link -> real_escape_string($_POST['consulta']);
        $query = "SELECT * FROM yza WHERE
            Marca LIKE '%".$q."%' OR
            Activos LIKE '%".$q."%' OR
            Cantidad_Activos LIKE '%".$q."%' OR
            Presentación LIKE '%".$q."%' OR
            Patente_generico LIKE '%".$q."%' OR
            Administracion LIKE '%".$q."%' OR
            Cantidad LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);


            if ($resultado -> num_rows > 0){

                $salida.="<table class = 'w3-table w3-striped w3-green'>
                <caption class =w3-teal>Farmacia YZA</caption>
                <caption class = w3-teal><a href='https://www.google.com.mx/maps/place/Farmacias+YZA/@18.1425076,-94.5232517,15.74z/data=!4m5!3m4!1s0x85e984fd075cf31d:0x51bf225881411178!8m2!3d18.1462867!4d-94.5198409?hl=es&authuser=1' target='_blank' style='text-decoration: none'>Dirección: Calle Beto Ávila 255, Vista Alegre</a></caption>
                <caption class = w3-teal>Teléfono: 921 212 1519</caption>
                    <thead>
                        <tr class='w3-teal'>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad de Activos</td>
                            <td>Presentación</td>
                            <td>Patente/Genérico</td>
                            <td>Administración</td>
                            <td>Cantidad</td>
                            <td>Precio/U</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr class = w3-white  >
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Cantidad'].'</td>
                            <td>'.$fila['Precio/U'].'</td>
                        </tr>';
                     }

            $salida.="</tbody></table><br>";

        } else {
            $salida.="";
        }
        
    echo $salida;
?>
