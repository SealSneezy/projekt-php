<?php
    require ('baza.php');

    error_reporting(0);

    $myemail = mysqli_real_escape_string($conn,$_POST['Email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT email, haslo FROM rodzice WHERE email = '$myemail' and haslo = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);

		
      if($count == 1) {
         header("location: index.php");
         session_start();
         $_SESSION['id'] = $id;
         $_SESSION['username'] = $myemail;
         $_SESSION['valid'] = true;
         $_SESSION['timeout'] = time(60);
      }else {
         echo "Dane logowania się nie zgadzają <br>" ;
         echo "<a href=index.php> Powrót na stronę główną </a>";
      }
?>
