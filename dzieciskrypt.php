<?php
require ('baza.php');
    session_start();
    $imie = mysqli_real_escape_string($conn, $_POST["imie"]);
    $nazwisko = mysqli_real_escape_string($conn, $_POST["nazwisko"]);
    $miejscowosc = mysqli_real_escape_string($conn, $_POST["miejscowosc"]);
    $PESEL = mysqli_real_escape_string($conn, $_POST["PESEL"]);
    $rodzic = $_SESSION['username'];
    $sql = "SELECT * FROM dzieci WHERE PESEL = '$PESEL'";
    $sql2= "INSERT INTO dzieci (Imie , Nazwisko, Miejscowosc, PESEL, EmailRodzica) VALUES ('$imie', '$nazwisko', '$miejscowosc', '$PESEL', '$rodzic')";
    $result = mysqli_query($conn,$sql);
    $rowCount = mysqli_num_rows($result);

    if($conn){
        if(isset($_POST['imie'])&&!empty($_POST['imie'])&&isset($_POST['nazwisko'])&&!empty($_POST['nazwisko'])&&isset($_POST['miejscowosc'])&&!empty($_POST['miejscowosc'])&&isset($_POST['PESEL'])&&!empty($_POST['PESEL']))
        {
            if (strlen($_POST['PESEL']) <11){
                die(' PESEL musi miec 11 cyfr '); 
          }
          if (strlen($_POST['PESEL']) >11){
            die(' PESEL musi miec 11 cyfr '); 
      }
            if($PESEL<0){
                exit("PESEL nie przyjmuje wartosci ujemnych");
            }
            if (!preg_match("/^[0-9]*$/",$PESEL) === true)
            {
               exit("PESEL nie zawiera w sobie liter");
             }
             if (!preg_match("/^[a-zA-Z]*$/",$imie) === true)
             {
                exit("Imie moze posiadac tylko litery");
              }
              if (!preg_match("/^[a-zA-Z]*$/",$nazwisko) === true)
              {
                 exit("Nazwisko moze posiadac tylko litery");
               }
               if (!preg_match("/^[a-zA-Z]*$/",$miejscowosc) === true)
               {
                  exit("Miejscowosc moze posiadac tylko litery");
                }
            if($rowCount>0)
            {
                echo "Dziecko o takim peselu zostało już zapisane"; 
            }
            else{
                mysqli_query($conn, $sql2);
                echo "Dziecko zostało dodane do listy";
            }
             
        }
        else{
            echo "Brak wymaganych danych";
        }
        
    }
 
?>