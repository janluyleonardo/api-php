<?php

include_once 'pelicula.php';

class ApiPeliculas{


    function getAll(){
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerPeliculas();

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "imagen" => $row['imagen'],
                );
                array_push($peliculas["items"], $item);
            }
        
            // echo json_encode($peliculas);
            $this->printJSON($peliculas);
        }else{
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            $this->Error('No hay elementos regstrados');
        }
    }
    
    function getById($id){
        $pelicula = new Pelicula();
        $peliculas = array();
        $peliculas["items"] = array();

        $res = $pelicula->obtenerPeliculas($id);

        if($res->rowCount()){
            while ($row = $res->fetch(PDO::FETCH_ASSOC)){
    
                $item=array(
                    "id" => $row['id'],
                    "nombre" => $row['nombre'],
                    "imagen" => $row['imagen'],
                );
                array_push($peliculas["items"], $item);
            }
        
            // echo json_encode($peliculas);
            $this->printJSON($peliculas);
        }else{
            // echo json_encode(array('mensaje' => 'No hay elementos'));
            $this->Error('No hay elementos regstrados');
        }
    }
    
    function printJSON($array){
        echo '<code>'. json_encode($array).'</code>';
    }
    
    function Error($message){
        echo '<code>'. json_encode(array('mensaje' => $message)).'</code>';
    }
    
}

?>