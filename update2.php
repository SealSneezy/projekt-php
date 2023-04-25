<?php
require ('baza.php');
    session_start();
    $email = mysqli_real_escape_string($conn, $_POST["NowyEmail"]);
    $imie = mysqli_real_escape_string($conn, $_POST["Imie"]);
    $nowe = mysqli_real_escape_string($conn, $_POST["NoweNazwisko"]);
    $adres = mysqli_real_escape_string($conn, $_POST["Adres"]);
    $haslo = mysqli_real_escape_string($conn, $_POST["Haslo"]);
    $checker = $_SESSION['username'];
    $sql = "UPDATE rodzice SET Email = '$email', Imie = '$imie', Nazwisko = '$nowe', Adres = '$adres', Haslo = '$haslo' WHERE Email ='$checker'";
    $sql3 = "UPDATE rodzice SET Imie = '$imie', Nazwisko = '$nowe', Adres = '$adres', Haslo = '$haslo' WHERE Email ='$checker'";
    $sql2 = "SELECT * FROM rodzice WHERE email = '$email'";
    $result = mysqli_query($conn,$sql2);
    $rowCount = mysqli_num_rows($result);
    $rodzic = $_SESSION['username'];

    if($conn){
        if(isset($_POST['Imie'])&&!empty($_POST['Imie'])&&isset($_POST['NowyEmail'])&&!empty($_POST['NowyEmail'])&&isset($_POST['NoweNazwisko'])&&!empty($_POST['NoweNazwisko'])&&isset($_POST['Adres'])&&!empty($_POST['Adres'])&&isset($_POST['Haslo'])&&!empty($_POST['Haslo']))
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false )
             {
                exit("email jest źle zapisany");
            }
            if (!preg_match("/^[a-zA-Z]*$/",$imie) === true)
             {
                exit("Imie moze posiadac tylko litery");
              }
              if (!preg_match("/^[a-zA-Z]*$/",$nowe) === true)
             {
                exit("Nazwisko moze posiadac tylko litery");
              }
              if (!preg_match("/^[a-zA-Z]*$/",$adres) === true)
             {
                exit("Miejscowosc moze posiadac tylko litery");
              }
            
            if($rowCount>0)
            {   
                if($email = $checker){
                    mysqli_query($conn,$sql3);
                    session_destroy();
                    echo "Edycja danych powiodła się, nie wprowadzono zmian emaila ponieważ nie został zmieniony lub istnieje już konto z takim emailem <a href=logowanie.php> Powrót na stronę logowania </a>";
                }else{
                echo "Taki profil już istnieje lub podano błędne dane";
                
                }
            }
            else{
                mysqli_query($conn,$sql);
                session_destroy();
                echo "Edycja powiodła się oraz zostałeś wylogowany <a href=logowanie.php> Powrót na stronę logowania </a>";  
            }
             
        }
        else{
            echo 'Nie podano wszystkich danych <a href="index.php">powrót do strony głównej</a>';
        }
        
    }else{
        echo "Połączenie z bazą zerwane";
    }
    
?>