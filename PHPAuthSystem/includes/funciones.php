<?php
function analizar($datos)
{
    return (isset($_POST[$datos])) ? trim(htmlspecialchars($_POST[$datos])) : "";
}


