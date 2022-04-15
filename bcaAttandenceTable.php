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
                <div class="date" style="margin: 20px 40px; font-size: 20px; text-decoration: underline">
                    <?php
                    echo "Date:" ;
                    echo $_POST['a_date'];
                    ?>
                </div>

  	        <table>
              <tr>
                <th id="std_name">
                  STUDENT NAME
                </th>
                <th>Day-1</th>
                <th>Day-2</th>
                <th>Day-3</th>
                <th>Day-4</th>
                <th>Day-5</th>
                <th>Day-6</th>
                <th>Day-7</th>
                <th>Day-7</th>
                <th>Day-9</th>
                <th>Day-10</th>
                <th>Day-11</th>
                <th>Day-12</th>
                <th>Day-13</th>
                <th>Day-14</th>
                <th>Day-15</th>
                <th>Day-16</th>
                <th>Day-17</th>
                <th>Day-18</th>
                <th>Day-19</th>
                <th>Day-20</th>
                <th>Day-21</th>
                <th>Day-22</th>
                <th>Day-23</th>
                <th>Day-24</th>
                <th>Day-25</th>
                <th>Day-26</th>
                <th>Day-27</th>
                <th>Day-28</th>
                <th>Day-29</th>
                <th>Day-31</th>
                <th>Day-32</th>
                <th>Toal Operating Days</th>
                <th>Toal Present Days</th>
                <th>Toal Absent Days</th>
              </tr>
                <?php
                include 'retrivedata.php';
                $i=1;
                while($result = mysqli_fetch_assoc($query)){

                ?>
                    <tr>
                        <td style="text-transform: capitalize">
                            <?php
                           echo $result['s_firstname']. $result['s_lastname'];

                            ?>
                        </td>
                        <td>
<!--                            --><?php
//
//                            if(isset($_POST['submit'])){
//                                echo "hi";
//                               $att = $_POST['attendence'].$i.$_POST['bca'];
//                               echo $att;
//
//                            }
//                            ?>

                        </td>
                        <td>
<!--                            --><?php
//
//                            echo $_POST['attendence1bca'];
//                          ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    </tr>
                <?php
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