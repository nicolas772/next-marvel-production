<?php 

declare(strict_types=1);

function render_template (string $template, array $data = []) {
  extract($data); //extrae las keys del arreglo asociativo y los deja como variables que se pueden acceder en la funcion
  require "templates/$template.php";
}