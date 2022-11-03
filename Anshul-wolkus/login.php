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
$lo=$_POST['mail'];
$pa=$_POST['pass'];
if(isset($_POST['submit'])){
$ad="SELECT * FROM admin WHERE mail='$lo' && pass='$pa'";
$s="SELECT * FROM sign WHERE email='$lo'&& pswd='$pa'";
$n=mysqli_query($con,$s);
$r=mysqli_num_rows($n);
$am=mysqli_query($con,$ad);
$rn=mysqli_num_rows($am);
if($rn){
    header('Location: admin.php');
}
elseif($r){
    $row=mysqli_fetch_assoc($n);
    $_SESSION['name']=$row['txt'];
    
    header('Location: nav/index.php');
}
else{
    echo "<script> 
    Swal.fire({
        title: 'user dosent exist',
        icon: 'error',
       
        confirmButtonColor: '#3085d6',
    
        confirmButtonText: 'ok'
      }).then((result) => {
        if (result.isConfirmed) {
         document.location='index.php'; 
        }
      })
    
    </script>";
}
}
?>
</body>
</html>
