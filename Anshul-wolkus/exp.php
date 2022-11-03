<?php

include("db.php");
$na=$_POST['mail'];
if(isset($_POST['submit'])){
    $s="SELECT * FROM sign WHERE email='$na'";
    $n=mysqli_query($con,$s);
    $r=mysqli_num_rows($n);
    if($r){

        while($row = mysqli_fetch_array($n)){ 
            $Subject =  "password reset";
            $Msg = $row['pswd'];
            $headers =  'MIME-Version: 1.0' . "\r\n"; 
            $headers .= 'From: kito <infocbs869@gmail.com>' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
            $to = $na;
            
            $txt = "Dear your password is"."\n\n".$Msg;
      
            
            mail($to,$Subject,$txt,$headers);
             
             echo "<script>alert('CHECK YOUR MAIL');
             document.location='index.php';
             </script>";

             ;
    }

  
}
}
?>