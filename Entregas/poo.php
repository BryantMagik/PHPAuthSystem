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
    /* EJERCICIO 1 y 2*/
    class Persona
    {
        public $nombre;
        public $edad;
        const MAYORIA_DE_EDAD = "mayor de edad";
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
            if ($this->edad >= 18) {
                echo self::MAYORIA_DE_EDAD;
                return ':' . $this->nombre . ':' . $this->edad;
            }
            return $this->nombre . ':' . $this->edad;
        }

    }

    $persona = new Persona('Brys', '18');
    echo $persona->mostrarDatos();
    $persona1 = new Persona('Roger', '20');
    ?>
    <?php
    /*Ejercicio 3*/

    class Libro
    {
        public $titulo;
        public $autor;
        public $anio_de_publicidad;
        const IDIOMA = 'Español';
        const NUMERO_PAGINAS = '200';

        
    }

    ?>
</body>

</html>