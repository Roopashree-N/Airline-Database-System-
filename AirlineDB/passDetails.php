 <?php
 session_start();
 if (!(isset($_SESSION["numOfPassengers"])))
{
		 die("There was an error");
}

if($_SESSION["numOfPassengers"] == 0)
{
	header("Location: finalprice.php");
}
   ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Enter Passesnger Details</title>
    <style>
      body{
            background-size: cover;
            background-repeat: no-repeat;   
      background-image:linear-gradient(rgba(50,50,50,0.2),rgba(50,50,50,0.2)) ,url(images/flight2.jpg);
        }
      </style>
   </head>
   <body>

   	<form action="passenger.php" method="post" class="pass">
    <pre>
        <!-- Passenger <?php $counter ?> details: -->
        NAME:  <input type="text" name="name" required><br>
         AGE:  <input type="text" name="age" required><br>
      GENDER:  <input type="radio" name="gender" value="male">Male    <input type="radio" name="gender" value="Female">Female<br>
     CONTACT:  <input type="text" name="contact" required> <br>

      </pre>
    <button type="submit" name="submit" class="btn">CONFIRM</button>
    
  </form>
   
   </body>
   </html>



 