<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){

    require_once 'phpmysql.php';


    $email = $_POST['email'];
    $passw = $_POST['password'];
    
    $result1 = $conn->query("SELECT id FROM users WHERE email = '$email'");

    // If email does not exist
    if($result1->num_rows == 0) {
        echo "Email does not exist";

    // If email exists
    } else {
        $sql = "SELECT firstName, lastName, password FROM users where email='".$email."'";
        $result = $conn->query($sql);
        if ($conn && ($result->num_rows > 0)) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
                $password = $row['password'];
            }
        }

        if (password_verify($passw, $password)) {
            // Store data in session variables
            
            $_SESSION["loggedin"] = true;
            $_SESSION["sid"]=session_id();
            $_SESSION["firstName"]=$firstName;
            $_SESSION["lastName"]=$lastName;

            echo '<script type="text/javascript"> window.open("dashboard.php","_self");</script>';
            

        } else {
            echo 'Wrong password!';
        }

    };

}
?>
