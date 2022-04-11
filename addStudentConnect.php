<?php
if(isset($_POST['addStudent'])) {
    include "db.php";
    $firstname = $_POST['contact_form_firstname'];
    $lastname = $_POST['contact_form_lastname'];
    $number = $_POST['contact_form_phone_no'];
    $email = $_POST['contact_form_email'];

   
    $sql = "INSERT INTO addstudent( a_s_firstname, a_s_lastname, a_s_roll, a_s_email )
values (' $firstname', ' $lastname', '$number', '$email' )";
    $query = mysqli_query($conn, $sql);
    if($query){
        header('location:./bcaAttandenceTable.php');
    }
    else{
        echo "error" ;
    }
}
