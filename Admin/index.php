<?php
require '../conn.php';
# kalau admin
if (!isset($_SESSION['admin'])) {
    header('location: ../logout.php');
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        
    <style>
      * {
        box-sizing: border-box;
      }

      /* Style the body */
      body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      /* Header/logo Title */
      .header {
        padding: 60px;
        background-position: center;
        background-image: url("header.png"); 
        background-size: cotain;
        background-repeat: no-repeat;
      }

      /* Increase the font size of the heading */
      .header h1 {
        font-size: 40px;
      }

      .navbar {
        overflow: hidden;
        background-color: #333;
        position: sticky;
        position: -webkit-sticky;
        top: 0;
      }

      /* Style the navigation bar links */
      .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
      }

      /* Right-aligned link */
      .navbar a.right {
        float: right;
      }

      /* Change color on hover */
      .navbar a:hover {
        background-color: #ddd;
        color: black;
      }

      /* Active/current link */
      .navbar a.active {
        background-color: #666;
        color: white;
      }

      /* Column container */
      .row {  
        display: -ms-flexbox; /* IE10 */
        display: flex;
        -ms-flex-wrap: wrap; /* IE10 */
        flex-wrap: wrap;
      }

      /* Create two unequal columns that sits next to each other */
      /* Sidebar/left column */
      .side {
        -ms-flex: 20%; /* IE10 */
        flex: 20%;
        background-image: url("blue.jpg"); 
        padding: 20px;
      }

      /* Main column */
      .main {   
        -ms-flex: 80%; /* IE10 */
        flex: 80%;
        background-image: url("1.jpg"); 
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px;
      }

      /* Fake image, just for this example */
      .fakeimg {
        background-image: url("adm.png");
        background-repeat: no-repeat;
        width: 100%;
        padding: 20px;
      }

      /* Footer */
      .footer {
        padding: 3px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      /* Text */
      .text{
      text-align:left;
      }

      /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 700px) {
        .row {   
          flex-direction: column;
        }
      }

      /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
      @media screen and (max-width: 400px) {
        .navbar a {
          float: none;
          width: 100%;
        }
      }

      /* PAGE2 */
      /* Footer2 */
      .footer2 {
        padding: 1px;
        text-align: center;
          background-image: url("clr.jpg");
      }

      .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
      }

      @media screen and (max-width: 650px) {
        .column {
          width: 100%;
          display: block;
        }
      }

.card {
				box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			}

			.container {
				padding: 0 16px;
			}

			.container::after, .row2::after {
				content: "";
				clear: both;
				display: table;
			}


      .title {
        color: grey;
      }

      .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 5px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
      }

      .button:hover {
        background-color: #555;
      }
	  
	  	.table, td, th {
		border: 1px solid black;
		}

	.table {
		width: 300%;
	border-collapse: collapse;
			}
    </style>
  </head>
  <body>
    <div data-role="page" id="page1">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
        <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Terms and Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
      </div>
         
         
<h1>Nama sistem: Sistem Sewa kereta (SSK)</h1><br>
<br> Nama Programmer: <a href="admin/">Admin (Linda)</a>
         
         
           <div>
    <?php
    $menu = 'senarai';
    if (isset($_GET['menu'])) $menu = $_GET['menu'];
    require "$menu.php";
    ?>
</div>
      <div class="main">
         <center><h2>WELCOME ADMINSTRATOR</h2></center>
         <h1></h1>
         
	<footer style="background-color: hotpink">
    Admin
</footer>
</div>
        </div>
      </div>

    </div>

    <div data-role="page" id="page2">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
         <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Term and Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
       
</div>

      <h2>CAR MENU</h2>

      <center>
       	<table border="2" width="50%">
             <tr>
			 <td bgcolor="D3D3D3"><center><a href="#page3"><h4><b>UPDATE</b></h4></center></a></td>
			 </tr>
			</table>
      </center>
      <br>

      <?php
      $sql="SELECT * FROM car";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>

      <div class="row2">
        <div class="column">
          <div class="card">
     
            <div class="container">
              <h2><?php echo $row->carname; ?></h2>
              <p class="title"><?php echo $row->carbrand; ?></p>
              <p>Rent Price:</p>
              <p>RM <?php echo $row->priceperhour; ?> per hour<br>
              RM <?php echo $row->priceperday; ?> per day<br>
              RM <?php echo $row->priceperweek; ?> per week</p>
              <td><input type="button" value="Edit" onclick="window.location='edit.php?idCar=<?php echo $row->idCar; ?>'"></td> 
              <td><input type="button" value="Delete" onclick="padam('<?php echo $row->idCar; ?>')"></button></td>
            </div>
          </div>
        </div>
      </div>
	  
	  <script>
	  function padam(idCar){
		  if (confirm('Are Sure Want To Delete?')){
			  window.location='delete.php?idCar='+idCar;
		  }
	  }
	  </script>

      <?php
      }
      ?>

      
    </div>

    <div data-role="page" id="page3">
      <div class="header">
        <h1></h1>
      </div>

      <div class="navbar">
       <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Update Car</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Term and Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
      </div>

      <h2>UPDATE CAR</h2>
      <br>
	  
      <form enctype="multipart/form-data" action="simpan.php" method="post" data-ajax="false">
	 <table> 
      <input type="hidden" name="idCar" value="" />
		
        <label>Car Name</label>
		<input id="carname" type="text" name="carname" value="" required/>
		
		<label>Car Brand</label>
		<input id="carbrand" type="text" name="carbrand" value="" required/>
		
        <label>Price per Hour</label>
		<input id="priceperhour" type="number" name="priceperhour" value="" required/>
		
        <label>Price per Day</label>
		<input id="priceperday" type="number" name="priceperday" value="" required/>
		
        <label>Price per Week</label>
		<input id="priceperweek" type="number" name="priceperweek" value="" required/>
		
       
        <input type="submit" value="submit" name="submit" width="50%" />
	 </table>
      </form>


    </div>
	
	
	<div data-role="page" id="page4">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
   <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Terms and Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>


  <h2>CUSTOMER DETAILS</h2>


      <div class="row2">
        <div class="column">
     
            
			 <table border="5" width="300%">
			 
						 <input type="hidden" name="idbooking" value="<?php echo $row->idbooking; ?>">
						 
 <th>FULL NAME</th>
 <th>AGE</th>
<th>IC NUMBER</th>
<th>CONTACT NUMBER</th>
<th>BOOKING DATE</th>
<th>RETURNING DATE</th>
<th>DESTINATION</th>
<th>EMAIL</th>
						 											 					 
		 <?php
      $sql="SELECT * FROM booking t1 JOIN customer t2 ON t1.idCustomer=t2.idCustomer
	  JOIN  car t3 ON t1.idCar=t3.idCar ";
      $result= $conn->query($sql);
      while($row=$result->fetch_object()){
      ?>
						  <tr>
						  <td><?php echo $row->fullname; ?></td>
						  <td><?php echo $row->age; ?></td>
						  <td><?php echo $row->icnum; ?></td>
						  <td><?php echo $row->caddress; ?></td>
						  <td><?php echo $row->contactnumber; ?></td>
						  <td><?php echo $row->licensetype; ?></td>
						  <td><?php echo $row->carname; ?></td>
						  <td> <?php echo $row->bookingdate; ?></td>
						  <td><?php echo $row->returndate; ?></td>
						    <td><?php echo $row->goingto; ?></td>
						  <td><?php echo $row->email; ?></td><br>
						  </tr>
						  
		

      <?php
      }
      ?>
	  	</table>	 
				  </div>
           
        </div>
		
		
      </div>

<div class="footer2">

</div>
</div>
<div data-role="page" id="page5">
<div class="header">
  <h1></h1>
  <h2>Staff & Car Availability</h2>
</div>
<div class="navbar">
  <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Terms And Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>
</div>
     

<div data-role="page" id="page6">
<div class="header">
  <h1></h1>
</div>

<div class="navbar">
     <a href="#page1">Home</a>
        <a href="#page2">Car Menu</a>
        <a href="#page3">Upgrade Menu</a>
		<a href="#page4">Customer Details</a>
		<a href="#page5">Staff & Car Availability</a>
		<a href="#page6">Terms and Condition</a>
       <a href="#page7" class="right" onclick="logout()">LogOut</a>
</div>

<h2>TERMS AND CONDITION</h2><br>
<center>
<img src="terms2.jpg"width="500" height="270"> 
<p><h4><b>
1) Customer Please Take and Return car Ontime <br>
2) Always Keep car in Good condition and clean <br>
3) Please Follow the Car seat for enough person <br>
</b></h4><p>
</center>

</div>
<script>
function logout() {
 alert("You're Logout Now");
 window.location.href = "../index.php";
}
</script>
  </body>
</html>

