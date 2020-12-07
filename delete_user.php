<?php
define('__APP__', TRUE);

session_start();
include ("dbconn.php");

if(isset($_POST['btn_delete'])){
    $username = $_POST['username_delete'];
    $query= "DELETE FROM korisnik WHERE username='$username'";
    $result = @mysqli_query($conn, $query);
    if($result){
        header("Location: admin.php");
        
    }
    else
    {echo "Nije dobro";}
};
?>