<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Crea un array asociaƟvo con los siguientes datos y claves.
    // nombre: Sara, apellido: Martínez, edad: 23, ciudad: Barcelona.
    // Muestra los valores del array anterior uƟlizando foreach 
    echo "EJERCICIO 1 <br>";
    echo "<br>";

    $client = array("name" => "Sara", "surname" => "Martinez", "age" => 23, "city" => "Barcelona");
    $data = 1;

    foreach ($client as $value) {
        echo "data $data º: $value <br>";
        $data++;
    }
    echo "<br>";

    // Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
    // foreach. 
    echo "EJERCICIO 2 <br>";
    echo "<br>";

    foreach ($client as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";

    // Modifica la edad del primer array a 24. Vuelve a mostrar toda su información
    echo "EJERCICIO 3 <br>";
    echo "<br>";

    $data = 1;

    $client["age"] == 24;

    foreach ($client as $value) {
        echo "data $data º: $value <br>";
        $data++;
    }
    echo "<br>";

    // Borra la ciudad del array y vuelve a mostrar toda su información usando la función
    // var_dump. 

    // $client["city"] == null; //sigue poniendo el valor de la key pero no la key
    echo "EJERCICIO 4 <br>";
    echo "<br>";

    unset($client["city"]);
    echo "<pre>";
    var_dump($client);
    "</pre>";
    echo "<br>";

    // Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
    // $letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
    // información en orden descendente
    echo "EJERCICIO 5 <br>";
    echo "<br>";

    $data = 0;

    $letters = "a,b,c,d,e,f";
    $arrayExplode = (explode(",", $letters));
    echo "<br>";
    rsort($arrayExplode);
    $count = 6;
    foreach ($arrayExplode as $l) {
        echo "data $count º: $l <br>";
        $count--;
    }
    echo "<br>";

    // Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
    // las siguientes:
    // Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
    // Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
    // mayor a menor
    echo "EJERCICIO 6 <br>";
    echo "<br>";

    $data = 1;

    echo "Notas de los estudiantes: <br>";
    $notas = array("Miguel" => 5, "LLuís" => 7, "Marta" => 10, "Isabel" => 8, "Aitor" => 4, "Pepe" => 1);
    arsort($notas);
    foreach ($notas as $n) {
        echo "data $data º: $n <br>";
        $data++;
    }
    echo "<br>";

    //     Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
    // nombres de los alumnos cuya nota esté por encima de la media.
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

    // Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
    // el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
    // array
    echo "EJERCICIO 8 <br>";
    echo "<br>";
    //Buscar la nota : 

    arsort($notas);
    
    foreach ($notas as $key => $value) {
        echo "La nota mas alta es $value";
        echo " y el mejor alumno es $key";
        break;
    }
    
    //echo la nota y el nombre del alumno
    //funcionar para cualquier valor??
    ?>
</body>

</html>