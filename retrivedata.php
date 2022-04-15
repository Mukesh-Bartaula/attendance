<?php
    include "db.php";
    $sql = "SELECT * FROM  students ORDER BY s_firstname";
    $query = mysqli_query($conn, $sql);
    ?>

