<?php
//include 'dbconnect.php';
@ $db = new mysqli('localhost', 'root', '314159265', 'autoglass');

if (mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
echo 'Connected';

$Year = $_POST['Year'];
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Style = $_POST['Style'];
$Vin = $_POST['Vin'];
$First = $_POST['First_Name'];
$Last = $_POST['Last_Name'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Email = $_POST['Email'];
$password = $_POST['Password'];
$repair = $_POST['repair'];
$chips  = $_POST['chips'];
$Back_Glass = $_POST['Back_Glass'];
$Side_Glass = $_POST['Side_Glass'];
$Door_Glass = $_POST['Door_Glass'];
$Vent_Glass = $_POST['Vent_Glass'];
$Quarter_Glass = $_POST['Quarter_Glass'];
$Payment = $_POST['Payment'];

if (mysqli_connect_error()){
die('Connect Error ('.mysqli_connect_errno().') '.mysqli_connect_error());
}
else{
  if(!get_magic_quotes_gpc())
  {
    $Year = addslashes($Year);
    $Make = addslashes($Make);
    $Model = addslashes($Model);
    $Style = addslashes($Style);
    $Vin = addslashes($Vin);
    $First = addslashes($First);
    $Last = addslashes($Last);
    $Address = addslashes($Address);
    $Phone = addslashes($Phone);
    $Email = addslashes($Email);
    $password = addslashes($password);
    $repair = addslashes($repair);
    $chips  = addslashes($chips);
    $Back_Glass = addslashes($Back_Glass);
    $Side_Glass = addslashes($Side_Glass);
    $Door_Glass = addslashes($Door_Glass);
    $Vent_Glass = addslashes($Vent_Glass);
    $Quarter_Glass = addslashes($Quarter_Glass);
    $Payment = addslashes($Payment);
  }

  $sql = "Insert Into autoglass.customer (Email, First_Name, Last_Name ,Phone_number, Address, Password)
  VALUES ('$Email', '$First' ,'$Last','$Phone', '$Address', '$password');";
  $results = $db->query($sql);

  $sql = "SELECT Max(Customer_ID) FROM autoglass.customer;";
  $results = $db->query($sql);
  $row = $results->fetch_assoc();
  $ID = $row["Max(Customer_ID)"];
  $newsql = "Insert Into autoglass.quote (Customer_ID, Make, Model,Year, Style, Vin_Number, Payment)
  VALUES ($ID,'$Make', '$Model' ,'$Year', '$Style', '$Vin', '$Payment');";
  $db->query($newsql);
  $newsql = "Insert Into autoglass.fleets (Customer_ID, Status)
  VALUES ($ID, 'In Progress')";
  $db->query($newsql);
  
  if($db->query($newsql)){
    echo"New records is inserted succesfully";
  }
  else{
    echo "Error: ". $sql ."<br>" . $db->error;
  }
}
?>
