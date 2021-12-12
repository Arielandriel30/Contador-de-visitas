<?php

class Visita
{
    public $nombre;
    public $planeta;

    public function getNombre(){
        return $this->nombre;
    }
    
    public function setNombre($nombre){
        $this->nombre = $nombre;
    
    }

    public function getPlaneta(){
        return $this->planeta;
    }
    
    public function setPlaneta($planeta){
        $this->planeta = $planeta;
    
    }

function mostrarDatos()
{
    echo 'Tu nombre es: ';
   echo $this->nombre;
   echo '<br>';
   echo 'Y vienes de:';
   echo $this->planeta;
}

function guardar()
{
$a =$this->nombre;
$b =$this->planeta;
$new = array('Nombre'=>$a, 'Planeta' =>$b);
if (file_exists('visitas.json'))
{
 $contenido = file_get_contents('visitas.json');
 $data = json_decode($contenido);
 array_push($data, $new);
 file_put_contents('visitas.json', json_encode($data));

}else{
    $data = array();
    array_push($data, $new);
    $f = fopen('visitas.json', "w");
    fwrite($f, json_encode($data));
    fclose($f);
}
//header(("Location:index.php"));
}

}

function mostrarVisitas()
{
    $contenido = file_get_contents('visitas.json');
    $data = json_decode($contenido);
    foreach($data as $indice=>$datos)
    {
        echo $datos;
    }
}

if(isset($_POST['mostrar']))
{
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];
    $vistaUno = new Visita();
    $vistaUno->setnombre($nombre);
    $vistaUno->setplaneta($planeta);
    $vistaUno->guardar();
    mostrarVisitas();
}

?>