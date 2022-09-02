<?php
    include_once 'apipeliculas.php';

    $api = new ApiPeliculas();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        if(is_numeric($id)){
            $api->getById($id);
        }else{
            $api->error('Parametro invalido, debe ser un numero');
        }
        
        $api->getById($id);
    }else{
        $api->getAll();
    }
    
?>