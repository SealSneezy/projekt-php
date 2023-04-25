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
        </h1> 
 <?php 
    if (isset($_SESSION['valid']) && $_SESSION['valid'] == true) {
         echo '<p class="echo">'."Witaj na stronie " . htmlspecialchars($_SESSION['username']) . "!".'</p>';
?>
    <div class="mid">   <h1> Zapisz dziecko </h1> </div>
        <form action="dzieciskrypt.php" method="POST" id="dzieci">
                   
    Imię dziecka <br> <input type="text" name="imie" placeholder="Imie"> <br>

    Nazwisko <br> <input type="text" name="nazwisko" placeholder="Nazwisko">   <br>

    Miejscowość <br> <input type="text" name="miejscowosc" placeholder="Miejscowość"> <br>

    PESEL <br> <input type="number" name="PESEL" placeholder="PESEL"> <br>
    <input type="submit" value="Zapisz">
    <input type="reset" value="Cofnij">
    </form>
    <div class="disclaimer2">
    <a href="lista.php">Lista zapisanych dzieci</a>
    </div>
<?php
} else {
?>
<?php
    echo '<p class="echo">'."Zaloguj się aby wejść na tą stronę, <a href=index.php> Powrót na stronę główną </a>".'</p>' ;
}
?>



</body>
</html>