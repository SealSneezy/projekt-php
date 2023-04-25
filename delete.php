<?php
require ('baza.php');
    session_start();

        
    if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {

        $email = $_SESSION['username'];
        $sql = "DELETE FROM Rodzice WHERE email = '$email'";
        if($conn->query($sql) === TRUE) {
            echo "Konto usuniete pomyślnie";
            session_destroy();
        } else {
            echo "Błąd usuwania danych";
        }
    }else{
        echo 'zaloguj się aby usunąć konto <a href="index.php">powrót do strony głównej</a>';
    }

?>