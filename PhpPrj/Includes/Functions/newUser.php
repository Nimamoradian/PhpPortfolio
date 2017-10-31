<?php include 'dbconnect.php'; ?>        

<?php
function createAnAcount(){
    
    $insQuery ="INSERT INTO MyGuests (username, password, name, age, phone, email) VALUES (".$_POST['username'].",".$_POST['password']." ,".$_POST['age'].",".$_POST['phone'].",".$_POST['email'].")";
    
    if ($connection->query($insQuery) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $insQuery . "<br>" . $connection->error;
    }
    
        
}   

?>