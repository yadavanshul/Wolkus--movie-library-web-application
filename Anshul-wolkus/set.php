<html>
<head>
<title>kito</title>
 <link rel="stylesheet" href="style.css">

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

<?php
   session_start();
    include("db.php");
    $pass=$_POST['pass'];
    $otp=$_POST['otp'];
    $repass=$_POST['repass'];
    $ni=$_SESSION['mail'];
          
      $s="SELECT * FROM sign WHERE email='$ni'";
      $n=mysqli_query($con,$s);
          while($row = mysqli_fetch_array($n)){ 
              
              $o=$row['otp'];
            }
          
      if($pass==$repass&&$o==$otp){
  
        $up="UPDATE `sign` SET `pswd`='$pass'WHERE email='$ni'";
        $n=mysqli_query($con,$up);
        $p="UPDATE `sign` SET `tokken`=NULL,`expire`=NULL,`otp`=NULL WHERE email='$ni'";
        $s=mysqli_query($con,$p);
        echo "<script>  Swal.fire({
          title: 'PASSWORD UPDTED',
          icon: 'success',
         
          confirmButtonColor: '#3085d6',
     
          confirmButtonText: 'ok'
        }).then((result) => {
          if (result.isConfirmed) {
           document.location='index.php'; 
          }
        })
        </script>";
      }
      else{
        echo "<script>  Swal.fire({
          title: 'WRONG CREDENTIAL',
          icon: 'warning',
         
          confirmButtonColor: '#3085d6',
     
          confirmButtonText: 'ok'
        }).then((result) => {
          if (result.isConfirmed) {
           document.location='index.php'; 
          }
        })
        </script>";
      }
  
 
  ?>
  </body>
</html>