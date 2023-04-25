<?php
 $db_host = "localhost";
 $db_user = "root";
 $db_pass = "";
 $db = "szkola";
 $conn = mysqli_connect("localhost", "root", "","szkola")
 or die ("Odpowiedź: Błąd połączenia z serwerem $db_host");
 mysqli_select_db($conn, "szkola") or die("Odśwież strone za kilka sekund.");
?>