<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista</title>
</head>
<body>
     <div class="banner">
        <h1>ZESPÓŁ SZKÓŁ NR1 XYZ</h1> 
     </div> 
     <div class="sides1">
        <img src="baner.png" width="380" height="50px">
    </div>
    <div class="sides2">
        <img src="baner.png" width="380" height="50px">
</div>
<h1>
        <?php
        require('baza.php');
        session_start();
        if (isset($_SESSION['valid']) && $_SESSION['valid'] == true){
        ?>
<h1> 
            <div class="rejestracja"> 
                <a href="update.php">Edytuj Dane</a>
                </div>
                <div class="logowanie">
                <a href="logout.php">Wyloguj się</a>
            
        <?php }else{  ?>
            <div class="rejestracja"> 
                <a href="rejestracja.php">Zarejestruj się</a>
            </div>
            <div class="logowanie">
                <a href="logowanie.php">Zaloguj się</a>
                
        <?php
            
            }?>
            </div>
            <div class="index">
                <a href="index.php">Strona główna</a>
            </div>
            <div class="dzieci" action="dzieciskrypt.php">
                <a href="dziecko.php">Zapisz dziecko</a>
            </div>
            <div class="mid"><h2>Witaj na stronie szkoły! </div>
        </h1> 