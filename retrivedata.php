<?php
    include "db.php";
    $sql = "SELECT * FROM  addstudent ORDER BY a_s_firstname";
    $query = mysqli_query($conn, $sql);
    ?>

