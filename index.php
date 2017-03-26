<?php  

echo 'Probando la conexion';
echo '<br/>';
echo '<br/>';

// Create connection to Oracle 
$conn = oci_connect("gamesystem", "gamesystem", "localhost/"); 
 
if (!$conn) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "Conexion con exito a la base de datos de Oracle"; } 
 
// Close the Oracle connection 
oci_close($conn); ?>