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
        $currentuser = $_SESSION['username'];
        $sql = "SELECT * FROM rodzice WHERE email = '$currentuser'";
        $result = mysqli_query($conn, $sql);
        if($result){
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){


                    ?>
        <div class="mid"> <h2> Edytuj swoje dane </h2>
        <form action="update2.php" method="POST" id="register">
             Email <br> <input type="text" name="NowyEmail" value="<?php echo $row['email']; ?>"> <br>

            Imie <br> <input type="text" name="Imie" value="<?php echo $row['imie']; ?>">   <br>

            Nazwisko <br> <input type="text" name="NoweNazwisko" value="<?php echo $row['nazwisko']; ?>"> <br>

             Adres <br><input type="text" name="Adres" value="<?php echo $row['Adres']; ?>">   <br>

            Haslo <br><input type="password" name="Haslo" value="<?php echo $row['Haslo']; ?>"> <br>


            <input type="submit" value="Edytuj">

            <input type="reset" value="Cofnij">
                </form>
            <form action="delete.php" method="POST" id="delete">
                    <input type="submit" value="Usun konto">
                </form>
            <?php
                }
            }
        }

   ?>
    <?php
} else {
?>
<?php
    echo '<p class="echo">'."Zaloguj się aby wejść na tą stronę, <a href=index.php> Powrót na stronę główną </a>".'</p>' ;
}
?>