
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
            Estado LIKE '%".$q."%' OR
            Municipio LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);

            if ($resultado -> num_rows > 0){

                $salida.="<table class = 'tabla_datos'>
                    <thead>
                    <h5> Farmacia Similares</h5>
                        <tr>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad_Activos</td>
                            <td>Presentación</td>
                            <td>Patente_generico</td>
                            <td>Administracion</td>
                            <td>Estado</td>
                            <td>Municipio</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr>
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Estado'].'</td>
                            <td>'.$fila['Municipio'].'</td>
                        </tr>';
                     }

            $salida.="</tbody></table>";

        } else {
            $salida.="Medicamento no disponible";
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
            Estado LIKE '%".$q."%' OR
            Municipio LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);


            if ($resultado -> num_rows > 0){

                $salida.="<table class = 'tabla_datos'>
                    <thead>
                        <h5> Farmacia Union</h5>
                        <tr>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad_Activos</td>
                            <td>Presentación</td>
                            <td>Patente_generico</td>
                            <td>Administracion</td>
                            <td>Estado</td>
                            <td>Municipio</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr>
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Estado'].'</td>
                            <td>'.$fila['Municipio'].'</td>
                        </tr>';
                     }

            $salida.="</tbody></table>";

        } else {
            $salida.="Medicamento no disponible";
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
            Estado LIKE '%".$q."%' OR
            Municipio LIKE '%".$q."%'";
        }

        $resultado = $link -> query($query);


            if ($resultado -> num_rows > 0){

                $salida.="<table class = 'tabla_datos'>
                    <thead>
                        <h5> Farmacia YZA</h5>
                        <tr>
                            <td>Marca</td>
                            <td>Activos</td>
                            <td>Cantidad_Activos</td>
                            <td>Presentación</td>
                            <td>Patente_generico</td>
                            <td>Administracion</td>
                            <td>Estado</td>
                            <td>Municipio</td>
                        </tr>
                        </thead>
                    <tbody>";

                    while ($fila = $resultado -> fetch_assoc()){
                        $salida.='<tr>
                            <td>'.$fila['Marca'].'</td>
                            <td>'.$fila['Activos'].'</td>
                            <td>'.$fila['Cantidad_Activos'].'</td>
                            <td>'.$fila['Presentación'].'</td>
                            <td>'.$fila['Patente_generico'].'</td>
                            <td>'.$fila['Administracion'].'</td>
                            <td>'.$fila['Estado'].'</td>
                            <td>'.$fila['Municipio'].'</td>
                        </tr>';
                     }

            $salida.="</tbody></table>";

        } else {
            $salida.="Medicamento no disponible";
        }
    echo $salida;

?>