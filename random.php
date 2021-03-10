
<!DOCTYPE html>
<html>
<head>
  <title>Present Date</title>
  <style type="text/css">
  	/*@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";*/

body{
    margin: 0;
    padding: 0;
    background: white;
    background-size: cover;
    font-family: sans-serif;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: rgb(0, 0, 0)!important;
    opacity: 1; /* Firefox */
  }
.box{
    width: 380px;
    height: 10px;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    text-align: center;
}

.box h1{
    color: rgb(158, 106, 29);
    text-transform: uppercase;
    font-weight: 500;

}

::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    black!important;
}
:-moz-placeholder { /* Mozilla Firefox 4 to 18 */
    color:    black!important;
   opacity:  1;
}
::-moz-placeholder { /* Mozilla Firefox 19+ */
    color:    black!important;
   opacity:  1;
}
:-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    black!important;
}
::-ms-input-placeholder { /* Microsoft Edge */
    color:    black!important;
}

::placeholder { /* Most modern browsers support this now. */
    color:    black!important;
}

.box input[type = "date"]{
    border: 0;
    color: rgb(0, 0, 0)!important;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #000000;
    padding: 14px 10px;
    width: 200px;
    outline: none;
    color: rgb(0, 0, 0);
    border-radius: 24px;
    transition: 0.25s;
}

.box input[type = "date"]:focus {
    width: 280px;
    border-color: #000000;
   
}



.box input[type = "submit"]{
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #000000;
    padding: 14px 40px;
    outline: none;
    color: rgb(0, 0, 0);
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer;
}

.box input[type = "submit"]:hover{
    background: #b10707;
}


  </style>
</head>
<body>
	<form class="box" action="random.php" method="POST">
		<h3>Please, submit the present date</h3>
          <input type="Date" name="present_date_user">
          <input type="submit" name="user_submit" value="Submit">             
        </form>
	
	</form>
  
</body>
</html>

<?php
	
	
	if (isset($_POST['user_submit'])){
	$present_date_user = $_POST['present_date_user'];
	
	
	header('location:users.php');
	}
	?>