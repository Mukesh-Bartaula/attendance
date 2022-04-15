
<?php
$username = $_POST['username'];
$password = $_POST['password'] ;
if (isset($_POST['login_but'])) {
    if(empty($username)){
        // include "empty_username.php";

        header("location:empty_username.php");
    }
    elseif (empty($password)) {

        // include "empty_password.php";
        header("location:empty_password.php");
    }
    else{
        include "db.php";
        $username  = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * from logindb where Email = '$username' AND password ='$password'";
        $query = mysqli_query($conn, $sql);
        $count_rows =mysqli_num_rows($query);
        if($count_rows > 0){
            header("location:index.html");
        }
        else{
            header("location:./login_invalide.php");
        }



    }

}
?>
