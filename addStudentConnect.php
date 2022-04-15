<?php
if(isset($_POST['addStudent'])) {
    include "db.php";
    $firstname = $_POST['contact_form_firstname'];
    $lastname = $_POST['contact_form_lastname'];
    $number = $_POST['contact_form_phone_no'];
    $email = $_POST['contact_form_email'];

   
    $sql = "INSERT INTO students( s_firstname, s_lastname, s_roll, s_email )
values (' $firstname', ' $lastname', '$number', '$email' )";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location:./bcaAttandenceTable.php');
    }
    else{
        echo "error" ;
    }
}
