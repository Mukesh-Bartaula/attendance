<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
	<link rel="stylesheet" type="text/css" href="./style.css">
</head>
<body>
<div class="container">
	<div class="headbar">
		<div class="logo">
			<a href="homepage.php"><img src="./img/logo.png"></a>
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
					<a href="homepage.php" class="vnav_but ">
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
		<form method="POST" action="att_send_to_db.php">
			<div class="dailyAtt_table  ">

                    <div class="dailyAtt_month">
                        <label style="font-size: 20px">Date:</label>
                        <input type="date" name="date" style="width: 150px; font-size: 18px; margin: 30px 10px; padding:1px 5px">
                    </div>

				<table>
					<tr>
						<th>
							S.N
						</th>
						<th>
							Student Name
						</th>
						<th>
							Attendence
						</th>
					</tr>

                    <?php
                    include "retrivedata.php";
                    $i=1;
                    while($result = mysqli_fetch_assoc($query)){

                    ?>
					<tr>
                        <td>
                            <?php
                                echo $i;

                            ?>
                        </td>
                        <td>
                            <?php
                            echo  $result['s_firstname']. $result['s_lastname'];

                            ?>
                        </td>
                        <td>
                            <label>
                                present:
                            </label>
                            <input required type="radio" name="attendence[<?php echo $result['s_id']?>]" value="p" class="s_present">
                            <label>
                                absent:
                            </label>
                            <input required type="radio" name="attendence[<?php echo $result['s_id']?>]" value="a" class="s_absent">
                        </td>
                    </tr>
                    <?php
                        $i++;
                    }
                    ?>
				</table>
                <div style="display: flex; justify-content: space-between;padding: 30px 0;width: 100%">
                    <a href="att_date.php">
                        <input type="button" value="view" style="width: 120px; height: 50px;display: inline">

                    </a>

                    <div class="dailyAtt_button">
                        <button name="submit_att">
                            submit
                        </button>
                    </div>
                </div>
			</div>


                    <a href="./bcaAttandenceTable.php" >
                        <div class="backbutton">
                            <button>
                                back
                            </button>
                        </div>
                    </a>


        </form>

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