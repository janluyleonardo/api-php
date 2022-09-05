<?php
$NombreIngresoLaboral = $_POST['NombreIngresoLaboral'];
$CorreoIngresoLaboral = $_POST['CorreoIngresoLaboral'];
$ModalidadIngresoLaboral = $_POST['ModalidadIngresoLaboral'];
$FechaIngresoLaboral = $_POST['FechaIngresoLaboral'];
$HoraIngresoLaboral = $_POST['HoraIngresoLaboral'];
$IpIngresoLaboral = $_POST['IpIngresoLaboral'];
$SedeIngresoLaboral = $_POST['SedeIngresoLaboral'];

$curl = curl_init(); 
curl_setopt_array($curl, array( 
	CURLOPT_URL => 'https://api.cunapp.dev/api/IngresoLaboral/PostIngresoLaboral', 
	CURLOPT_RETURNTRANSFER => true, 
	CURLOPT_ENCODING => '', 
	CURLOPT_MAXREDIRS => 10, 
	CURLOPT_TIMEOUT => 0, 
	CURLOPT_FOLLOWLOCATION => true, 
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, 
	CURLOPT_CUSTOMREQUEST => 'POST', 
	CURLOPT_POSTFIELDS =>'{ 
		"NombreIngresoLaboral": "'.$NombreIngresoLaboral.'", 
		"CorreoIngresoLaboral": "'.$CorreoIngresoLaboral.'", 
		"ModalidadIngresoLaboral": "'.$ModalidadIngresoLaboral.'", 
		"FechaIngresoLaboral": "2022-09-02T13:52:03.8718155-07:00", 
		"HoraIngresoLaboral": "2022-09-02T13:52:03.8718155-07:00", 
		"IpIngresoLaboral": "'.$IpIngresoLaboral.'", 
		"SedeIngresoLaboral": "'.$SedeIngresoLaboral.'"
		}', 
	CURLOPT_HTTPHEADER => array( 'Content-Type: application/json' ), )); 

$response = curl_exec($curl); 
curl_close($curl); 
echo $response;

?>