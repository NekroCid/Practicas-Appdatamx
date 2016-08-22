 <?php
     $host="127.0.0.1";
     $port="5432";
     $user="postgres";
     $pass="natanahel";
     $dbname="users";
     $cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$pass";
     $connect = pg_connect($cadenaConexion)or die("Error en la Conexión: ".pg_last_error());
 ?>
