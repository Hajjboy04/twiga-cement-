<?php
// insertion of data//
$firstName= $_POST['fName'];
$lastName= $_POST['lName'];
$email= $_POST['email'];
$pass= $_POST['password'];
$pass= md5($pass);

// databasae connection//
$servername= "localhost";
$username= "root";
$password= "";
$DB= "cementsales";
$conn= mysqli_connect($servername, $username, $password, $DB);

// checking connection//

if ($conn){
    if (isset($firstName,$lastName,$email,$pass)){
        $checkEmail="SELECT * FROM user WHERE email='$email'";
        $result=$conn->query($checkEmail);

        if($result->num_rows>0){
            echo "Email inserted is existing already!!..";
        }
        else{
            $insertQuery="INSERT INTO user(lastName, email, password,firstName)
            VALUES ('$lastName', '$email', '$pass','$firstName')";

            if($conn->query($insertQuery)== TRUE){
                header("location: user.php");
            }else{
                echo "error:" .$conn->error;
            }
        }

    }
}else{
    echo "connection problem...opps";
}

?>