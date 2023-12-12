<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="content" content="Bryan Edward">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bryan Edward</title>
</head>

<body>
    <?php

    class Persona
    {
        public $nombre;
        public $edad;
        function __construct($nombre, $edad)
        {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }
        function get_name()
        {
            return $this->nombre;
        }
        function get_edad()
        {
            return $this->edad;
        }

        function mostrarDatos()
        {
            return $this->nombre .':'. $this->edad;
        }

    }

    $persona = new Persona('Brys','18');
    echo $persona->mostrarDatos();
    ?>
</body>

</html>