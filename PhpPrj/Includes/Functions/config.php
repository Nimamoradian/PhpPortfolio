<?php include 'dbconnect.php'; ?>        
	
<?php

$logedin="hidden";
$notloged="";
$nameErr ="";
$name = "";

$_session["Username"]= $_session["age"]=$_session["phone"]=$_session["email"]=$_session["name"]='Please login';

    
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST["buttonStatus"])){
         if ($_POST["buttonStatus"]== "login"){
             session_start();
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
                         $_session["email"]=$row['email'];
                         $_session["id"]=$row['id'];
                         
                         $logedin="";
                         $notloged="hidden";
                         $nameErr="";
                     }
                 } else {
                     $nameErr = "Incorrect user or password";
                 }
             }
         } else if ($_POST["buttonStatus"]== "changeprofile"){
             
             $insQuery ="UPDATE users SET 
                        name='".htmlspecialchars($_POST['PName'])."'
                        ,age=".htmlspecialchars($_POST['PAge'])."
                        ,phone=".htmlspecialchars( $_POST['PPhone'])."
                        ,email='".htmlspecialchars($_POST['PEmail'])."'
                         WHERE id=".$_POST['PId'];
            
             
             if (mysqli_query($connection, $insQuery)) {
                 echo "Record updated successfully";
             } else {
                 echo "Error updating record: " . mysqli_error($connection);
              }
              session_start();
                 $_session["age"]=$_POST['PAge'];
                 $_session["phone"]=$_POST['PPhone'];
                 $_session["name"]=$_POST['PName'];
                  $_session["email"]=$_POST['PEmail'];
                  $_session["id"]= $_POST['PId'];
                  $logedin="";
                  $notloged="hidden";
                  
         }
     }
}

        
function test_input($data) {
  $data = trim($data);  
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


function readcourses(){
    $host = "localhost";
    $username="root";
    $password="";
    $dbname="myPrj";
    
    
    $connection= mysqli_connect($host,$username,$password,$dbname);
    
    $sql = "SELECT * FROM courses";
    $result = mysqli_query($connection, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $course=
            "<a class='col-xs-2 icon'  href='Includes/Layouts/".$row["courseName"].".php' >".
                "<img  align='middle' src='".$row["imgUrl"]."' alt='".$row["courseName"]."' height='100%' width='100%'> <br>".   
                "<p>".$row["courseName"]. "</p>".
                "</a>".
                 "<div class='col-xs-1'></div>"   ;
            echo  $course;
        }
    } else {
        echo "0 results";
    }
    
}


?>
