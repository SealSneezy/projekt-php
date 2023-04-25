<?php
session_start();
if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {
session_destroy();
echo 'zostałeś wylogowany <a href="index.php">powrót do strony głównej</a>';
}else{
echo 'Nie jesteś zalogowany <a href="index.php">powrót do strony głównej</a>';
}
?>