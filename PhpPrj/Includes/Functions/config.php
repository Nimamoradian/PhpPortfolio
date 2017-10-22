<?php include 'dbconnect.php'; ?>        
	
<?php

session_start();
$nameErr ="";
$name = "";

$_session["Username"]=$_session["age"]=$_session["phone"]=$_session["name"]='Please login';

    
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $_session["Username"]=$_POST["user"];
       $_session["Password"]=$_POST["password"];
       
       if (empty($_session["Username"]) || empty($_session["Password"])) {
            $nameErr = "Incorrect user or password";
        } else{
            $query = "SELECT * FROM users WHERE Username ='". $_session["Username"] ."'" ;
            $result = mysqli_query($connection, $query);
            
            if (mysqli_num_rows($result) > 0) {

                $row = mysqli_fetch_assoc($result);
                
                if ($_session["Password"] == $row["password"] ){
                   $_session["age"]=$row['age'];
                   $_session["phone"]=$row['phone'];
                   $_session["name"]=$row['name'];
                   
                   $nameErr="welcome";
                }
            } else {
                $nameErr = "Incorrect user or password";
            }
          }
        }

        
function test_input($data) {
  $data = trim($data);  
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
