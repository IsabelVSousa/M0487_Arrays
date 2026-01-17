<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 

    echo "EJERCICIO 1 <br>";
    echo "<br>";

    $client = array("name" => "Sara", "surname" => "Martinez", "age" => 23, "city" => "Barcelona");
    $data = 1;

    foreach ($client as $value) {
        echo "data $data º: $value <br>";
        $data++;
    }
    echo "<br>";

    echo "EJERCICIO 2 <br>";
    echo "<br>";

    foreach ($client as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";


    echo "EJERCICIO 3 <br>";
    echo "<br>";

    $data = 1;

    $client["age"] = 24;

    foreach ($client as $value) {
        echo "data $data º: $value <br>";
        $data++;
    }
    echo "<br>";

    // $client["city"] == null; //sigue poniendo el valor de la key pero no la key
    echo "EJERCICIO 4 <br>";
    echo "<br>";

    unset($client["city"]);
    echo "<pre>";
    var_dump($client);
    echo "</pre>";
    echo "<br>";

    
    echo "EJERCICIO 5 <br>";
    echo "<br>";

    $data = 0;

    $letters = "a,b,c,d,e,f";

    $arrayExplode = (explode(",", $letters));
    echo "<br>";
    rsort($arrayExplode);

    // $count = 6;
    $count = count($arrayExplode);

    foreach ($arrayExplode as $l) {
        echo "data $count º: $l <br>";
        $count--;
    }
    echo "<br>";

   
    echo "EJERCICIO 6 <br>";
    echo "<br>";

    $data = 1;

    echo "Notas de los estudiantes: <br>";
    $notas = array("Miguel" => 5, "LLuís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);

    arsort($notas);

    foreach ($notas as $name => $nota) {
        echo "$name: $nota <br>";
        $data++;
    }

    echo "<br>";

    
    echo "EJERCICIO 7 <br>";
    echo "<br>";

    $total = array_sum($notas);
    $count = count($notas);

    $promedy = $total / $count;

    $formattedNum = number_format($promedy, 2);
    echo "La media de las notas es : " . $formattedNum . "<br>";

    echo "<br>";
    
    echo "Alumnos con nota por encima de la media: <br>";
    foreach ($notas as $key => $value) {
        if ($value > $promedy){
            echo "$key <br>";
        }
    }
    
    echo "<br>";

    
    echo "EJERCICIO 8 <br>";
    echo "<br>";
    //Buscar la nota : 

    // arsort($notas);
    
    foreach ($notas as $key => $value) {
        echo "La nota mas alta es $value";
        echo " y el mejor alumno es $key";
        break;
    }
    
    ?>
</body>

</html>