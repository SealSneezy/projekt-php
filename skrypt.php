<?php
require ('baza.php');

    $email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $imie = mysqli_real_escape_string($conn, $_POST["Imie"]);
    $nazwisko = mysqli_real_escape_string($conn, $_POST["Nazwisko"]);
    $adres = mysqli_real_escape_string($conn, $_POST["Adres"]);
    $haslo = mysqli_real_escape_string($conn, $_POST["Haslo"]);
    $sql = "SELECT * FROM rodzice WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);

    if($conn){
        if(isset($_POST['Imie'])&&!empty($_POST['Imie'])&&isset($_POST['Email'])&&!empty($_POST['Email'])&&isset($_POST['Nazwisko'])&&!empty($_POST['Nazwisko'])&&isset($_POST['Adres'])&&!empty($_POST['Adres'])&&isset($_POST['Haslo'])&&!empty($_POST['Haslo']))
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) === false )
             {
                exit("email jest źle zapisany");
            }
            if (!preg_match("/^[a-zA-Z]*$/",$imie) === true)
             {
                exit("Imie moze posiadac tylko litery");
              }
              if (!preg_match("/^[a-zA-Z]*$/",$nazwisko) === true)
             {
                exit("Nazwisko moze posiadac tylko litery");
              }
              if (!preg_match("/^[a-zA-Z]*$/",$adres) === true)
             {
                exit("Miejscowosc moze posiadac tylko litery");
              }
            if($rowCount>0){
                echo "Taki email już istnieje <a href=rejestracja.php> Spróbuj ponownie </a>";
                }
                else
                { mysqli_query($conn,"INSERT INTO rodzice (Email , Imie, Nazwisko, Adres, Haslo) VALUES ('$email', '$imie', '$nazwisko', '$adres', '$haslo')");
                    
                    echo "Rejestracja powiodła się <a href=index.php> Powrót na stronę główną </a>";
                }
             
        }
        else{
            echo "Brak wymaganych danych";
        }
        
    }
 
?>