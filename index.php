<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SSK</title>

    <style>
      
      body {

        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
      }

      /* Header/logo Title */
      .header {
        padding: 90px;
        background-position: center;
        background-image: url("header2.png"); 
        height: 50%;
    /* Position and center the image to scale nicely on all screens */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
}
      }

      /* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */
      .navbar {
        overflow: hidden;
        background-color: rgb(4, 88, 214);
        position: sticky;
        position: -webkit-sticky;
        top: 0;
      }

      /* Style the navigation bar links */
      .navbar a {
        float: left;
        display: block;
        color: rgb(248, 189, 79);
        text-align: center;
        padding: 10px 20px;
        text-decoration: none;
      }

    </style>
  </head>

  <body>
   
 <div data-role="page" id="page1">
<div class="header">
  <h1></h1>
  
</div>

<center>
  <form action="home_page.php" method="post">
      <h3>Login</h3>
<div class="container">
<label for="uname"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required><br><br>

<label for="psw"><b>Password</b></label>
<input type="password" placeholder="Enter Password" name="password" required><br><br>

<button type="submit">Login</button>

</form>

<br>

<h1>Nama sistem: Sistem Sewa kereta (SSK)</h1><br>


<a href="admin/">Admin (Linda)</a><br>
<br> menguruskan senarai kenderaan <br>
<br>melihat senarai pelanggan<br>

<a href="staff/">Staff (Zarul)</a><br>
<br> menguruskan senarai pelanggan<br>
<br> melihat senarai tempahan<br>

<a href="customer/">Customer (Aimi)</a><br>
<br> menguruskan senarai tempahan<br>

</center>
 
<hr color="pink" width="100%" size="10">

<br><center><h2> Database: SSK</center<br></h2><br>
<br><h3>Table: Car, Booking, Customer, Admin, Staff</h3><br>
<br>CAR ( idCar, carname, carbrand,priceperhour,priceperday,priceperweek,carpicture )<br>
<br>BOOKING ( idbooking, idcustomer, idcar, bookingdate, returndate, destination )<br>
<br>CUSTOMER (idcustomer, username, password, fullname, age, icnum, email, fonenumber)<br>
<br>ADMIN (password)<br>
<br>STAFF (password)<br>
<br>

<table border="1" cellpadding="8">

  <h2>TABLE: CAR</h2>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idCar</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>carname</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>carbrand</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>priceperhour</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>priceperday</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>priceperweek</td>
    <td>int</td>
    <td></td>
  </tr>
</table>

<table border="1" cellpadding="8">

  <h2>TABLE: BOOKING</h2>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idbooking</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>idcustomer</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>idcar</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>bookingdate</td>
    <td>date</td>
    <td></td>
  </tr>
  <tr>
    <td>returndate</td>
    <td>date</td>
    <td></td>
  </tr>
  <tr>
    <td>destination</td>
    <td>varchar(50)</td>
    <td></td>
  </tr>
</table>

<table border="1" cellpadding="8">

  <h2>TABLE: CUSTOMER</h2>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>idcustomer</td>
    <td>int</td>
    <td>PK, A_I</td>
  </tr>
  <tr>
    <td>username</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>password</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>fullname</td>
    <td>varchar (50)</td>
    <td></td>
  </tr>
  <tr>
    <td>age</td>
    <td>int</td>
    <td></td>
  </tr>
  <tr>
    <td>icnum</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>email</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  <tr>
    <td>fonenumber</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
</table>

<table border="1" cellpadding="8">

  <h2>TABLE: ADMIN</h2>
  <tr>
    <th>Name</th>
    <th>Type</th>
    <th>Extra</th>
  </tr>
  <tr>
    <td>password</td>
    <td>varchar (20)</td>
    <td></td>
  </tr>
  </table>

  <table border="1" cellpadding="8">

    <h2>TABLE: STAFF</h2>
    <tr>
      <th>Name</th>
      <th>Type</th>
      <th>Extra</th>
    </tr>
    <tr>
      <td>password</td>
      <td>varchar (20)</td>
      <td></td>
    </tr>
    </table>
  
</body>
</html>