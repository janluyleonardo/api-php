<?php
$NombreIngresoLaboral = $_POST['NombreIngresoLaboral'];
$CorreoIngresoLaboral = $_POST['CorreoIngresoLaboral'];
$ModalidadIngresoLaboral = $_POST['ModalidadIngresoLaboral'];
$FechaIngresoLaboral = $_POST['FechaIngresoLaboral'];
$HoraIngresoLaboral = $_POST['HoraIngresoLaboral'];
$IpIngresoLaboral = $_POST['IpIngresoLaboral'];
$SedeIngresoLaboral = $_POST['SedeIngresoLaboral'];

$otroObjeto = [
	"NombreIngresoLaboral" => $NombreIngresoLaboral,
	"CorreoIngresoLaboral" => $CorreoIngresoLaboral,
	"ModalidadIngresoLaboral" =>$ModalidadIngresoLaboral ,
	"FechaIngresoLaboral" => $FechaIngresoLaboral,
	"HoraIngresoLaboral" => $HoraIngresoLaboral,
	"IpIngresoLaboral" => $IpIngresoLaboral,
	"SedeIngresoLaboral" => $SedeIngresoLaboral,
];
echo "\n".json_encode($otroObjeto) . "\n";

?>