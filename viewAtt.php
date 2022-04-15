<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATTANDANCE MANAGEMENT SYSTEM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shizuru&family=Ubuntu:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
</head>
<body>
<div class="container">
    <div class="headbar">
        <div class="logo">
            <a href="./index.html"><img src="./img/logo.png"></a>
        </div>
        <div class="login">
            <a href="./login_page.html" class="log_in">log in</a>
        </div>
    </div>
    <hr style="height: 10px;" >
    <div class="att_container">
        <div class="vnavbar">
            <ul>
                <li>
                    <a href="#" class="vnav_but ">
                        <i class="fa fa-home" aria-hidden="true" class="vhome_icon"></i>
                        <span class="vhome-text"> HOME </span>
                    </a>
                </li>
                <li><a href="#" class="vnav_but active">BCA</a></li>
                <li><a href="#" class="vnav_but">BIM</a></li>
                <li><a href="#" class="vnav_but">BBS</a></li>
                <li><a href="#" class="vnav_but">BBM</a></li>
            </ul>
        </div>
        <div class="att_body" >
            <!--            <div class="date" style="margin: 20px 40px; font-size: 20px; text-decoration: underline">-->
            <!--                --><?php
            //                echo "Date:" ;
            //                echo $_POST['a_date'];
            //                ?>
            <!--            </div>-->

            <table style="width: 900px; border: none; display: flex; justify-content: center; margin-top: 100px ">
                <tr>
                    <th>
                        S.N
                    </th>
                    <th id="std_name">
                        STUDENT NAME
                    </th>
<!--                    <th>-->
<!--                        Date-->
<!--                    </th>-->
                    <th>
                        att_status
                    </th>
                </tr>
                <tr>
                    <?php
                    $date = $_GET['date'];

//                    echo $date;
                    $servername = 'localhost';
                    $username = "root";
                    $password = "";
                    $db = "demo";
                    $conn = mysqli_connect($servername, $username, $password, $db);
                    $query ="SELECT * FROM students INNER JOIN dailyatt ON students.s_id = dailyatt.std_id AND 
                                              dailyatt.date = '$date'";

                    $result = $conn->query($query);
                    if ($result->num_rows>0){
                    $i=1;
                    while ($val=$result->fetch_assoc()){

                    ?>
                    <td>
                        <?php
                        echo $i;
                        $i++;

                        ?>
                    </td>
                    <td>
                        <?php
                        echo  $val['s_firstname']. $val['s_lastname'];
                        ?>
                    </td>
<!--                    <td>-->
<!--                        --><?php
//                        echo $val['date'];
//                        ?>
<!--                    </td>-->
                    <td>
                        <?php
                        echo $val['att_status'];
                        ?>
                    </td>

                </tr>
                <?php
                }
                }
                ?>

            </table>
            <div class="buttondiv">
                <div class="Attendance">
                    <a href="dailyAttandence.php">
                        <button>Attandence</button>
                    </a>
                </div>
                <div class="addStudent">
                    <a href="addstudent.php">
                        <button>Add Student</button>
                    </a>

                </div>

            </div>
        </div>
    </div>



</div>
<footer>
    <div id="footer">
        <div class="footer_body">
            <div class="column_1">
                <h2>Contact</h2>
                <ul>
                    <li>Hetauda School Of Management</li>
                    <li>Hetauda-4, Makwanpur</li>
                    <li>ph no: 057524701, 057524711, 057524765</li>
                    <li>Emali: hsm@gmail.com</li>
                </ul>
            </div> <hr>

            <div class="column_3">
                <h2>About Us</h2>
                <ul>
                    <li> <a href="#"> Privacy policy </a></li>
                    <li><a href="#">Term & condition</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>  <hr>
            <div class="footer_icon" style="width:20%;">
                <a href="https://www.facebook.com/groups/HSM.forall/">
                    <i class="fab fa-facebook fa-3x" aria-hidden="true"></i>
                </a>
                <a href="https://www.instagram.com/hsm.edu.np/">
                    <i class="fab fa-instagram fa-3x" aria-hidden="true"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter fa-3x" aria-hidden="true"></i>
                </a>

            </div>
        </div>
    </div>
</footer>
</div>
<script src="./script.js"></script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dropdown menu</title>
</head>
<body>

</body>
</html>