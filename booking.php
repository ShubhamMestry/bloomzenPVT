<?php
$insert = false;
if(isset($_POST['name'])){
 $server = "localhost";
 $username = "root";
 $password = "";

 // Create a database connection
 $con = mysqli_connect($server, $username, $password);

 // Check for connection success
 if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
 }
    //echo "Success connecting to the db";

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
$sql = "INSERT INTO   `booking` .`booking` ( `name`, `email`, `phone`, `message`, `dt`) VALUES ('$name',  '$email', '$phone', '$message', current_timestamp());";
  //echo $sql;
 // Execute the query
 if($con->query($sql) == true){
    //echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

// Close the database connection
$con->close();
}

?>