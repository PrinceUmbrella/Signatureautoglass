<!DOCTYPE html>
<?php
  session_start();

  @ $db = new mysqli('localhost', 'root', '314159265', 'autoglass');
  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  if ( isset($_POST["account"]) && isset($_POST["pw"])    ) {

	  $username=$_POST["account"];
	  $password=$_POST["pw"];

	  if (!get_magic_quotes_gpc()){
		$username = addslashes($username);
		$password = addslashes($password);
	  }

	  $s_query = "SELECT * FROM autoglass.customer WHERE Customer_ID = ".$username." AND password = ".$password;
	  $t_query = "SELECT * FROM autoglass.employee WHERE employee_id = ".$username." AND Password = ".$password;

	  $s_result = $db->query($s_query);
	  $s_num_results = $s_result->num_rows;

	  $t_result = $db->query($t_query);
	  $t_num_results = $t_result->num_rows;

    echo print_r($t_result);

      if ($s_num_results == 1) {
        $s_row = $s_result->fetch_assoc();
        $_SESSION["Customer_ID"] = $_POST["account"];
        $_SESSION["First_name"] = $s_row['First_name'];
        $_SESSION["Last_name"] = $s_row['Last_name'];
        $_SESSION["success"] = "Logged in.";
        header('Location: login.php' ) ;
        return;
      } else if ($t_num_results == 1) {
		    $t_row = $t_result->fetch_assoc();
        $_SESSION["employee_id"] = $_POST["account"];
    		$_SESSION["First_Name"] = $t_row['First_Name'];
    		$_SESSION["Last_Name"] = $t_row['Last_Name'];
        $_SESSION["success"] = "Logged in.";
        header('Location: login.php' ) ;
        return;
	    } else {
        $_SESSION["error"] = "Incorrect username and/or password.";
        header( 'Location: login.php') ;
        return;
      }
  }

  $db->close();
 ?>
<html lang="en" dir="ltr">
<head>
<meta charset = "utf-8">
<link rel="stylesheet" href="style-login.css">
<title>Portal Login</title>
</head>

<body>


<form  class="box" method="post">
    <h1>Portal - Login</h1>
    <p><input type="text" name="account"  placeholder="Username" value=""></p>
    <p><input type="password" name="pw"  placeholder="Password" value=""></p>

  	<?php
       if (isset($_SESSION["error"]) ) {
          echo ('<p style = "color:red">' .$_SESSION ["error"]. "</p>\n" );
          unset ($_SESSION["error"]);
       }
       if (isset($_SESSION["success"]) ) {
          echo ('<p style = "color:green">' .$_SESSION ["success"]. "</p>\n" );
          unset ($_SESSION["success"]);
       }
   ?>

    <p><input type="submit" value="Log In">
    </p>
</form>

</body>

</html>
