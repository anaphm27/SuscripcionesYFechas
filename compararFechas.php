<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*Imagina que trabajas en una empresa que gestiona suscripciones y eventos para usuarios. Tu tarea es crear un 
    sistema que calcule:Si una suscripción está activa o caducada.Cuántos días faltan hasta la próxima fecha de vencimiento.
    Si un evento está en el pasado, presente o futuro.
    
    Para ello, necesitarás trabajar con objetos DateTime y usar comparaciones y operaciones con fechas.


    RequisitosCrear un objeto DateTime para la fecha de la suscripción de un usuario.Crear otro objeto 
    DateTime para la fecha actual.Comparar la fecha de la suscripción con la fecha actual.Mostrar cuántos días faltan hasta 
    la fecha de caducidad de la suscripción.Crear un objeto DateTime para una fecha de un evento (por ejemplo, una conferencia o reunión).
    Comparar la fecha del evento con la fecha actual y mostrar si el evento está en el pasado, presente o futuro.

    Crear repositorio en Visual Studio Code y subirlo a repositorio remoto en vuestra cuenta de GitHub.


    Enviarme captura del repositorio en GitHub. */


/*creo la fecha de vencimiento de suscripción */
    $fechaSus = new DateTime("2025-01-28");

/*creo la fecha actual */
    $fechaActual = new DateTime();



    if ($fechaSus > $fechaActual) {
        echo "La suscripción aún no ha caducado.<br>";
        $intervalo = $fechaActual->diff($fechaSus);
        echo "Quedan " . $intervalo->days . " días para que caduque la suscripción.<br>";
    } else {
        echo "La suscripción ha caducado.<br>";
    }

    
    //fecha del evento
    $fechaEvento = new DateTime("2025-01-21");

    
    $fechaEvento->setTime(0, 0, 0);
    $fechaActual->setTime(0, 0, 0);

    if ($fechaEvento < $fechaActual) {
        echo "El evento ya pasó.<br>";
    } elseif ($fechaEvento > $fechaActual) {
        echo "El evento está en el futuro.<br>";
    } else {
        echo "El evento es hoy.<br>";
    }
    
    ?>
</body>

</html>