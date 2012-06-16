<?php 
require "class.rcon.php"; 
require "class.counterstrike.php"; 
$counterstrike = new counterstrike("192:168.1.2:27015", "RCON_PASS"); 

if($counterstrike->Connect() === true){ // Conectar 
    //Si la conexion tuvo exito: 
    echo $counterstrike->Config("hostname"); // Escribir una configuración 
     
     $counterstrike->Config("hostname", "El nombre de mi server"); // Cambiar una configuración 
     
    print_r($counterstrike->Stats()); // Estadísticas del servidor. (CPU, IN, OUT, UPTIME (MINUTES), USERS, FPS) 
     
    print_r($counterstrike->Info()); // Información del servidor. (PLAYERS (ID, NAME, USERID, UNIQUEID, FRAG, TIME, PING, LOSS), HOSTNAME, HOST, MAP, COUNT_PLAYERS (ACTIVE, MAX))
     
    print_r($counterstrike->GetAllMaps()); // Todos los mapas disponibles. 
} 

$counterstrike->Disconnect(); // Desconectar 