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
        $sql = "SELECT password FROM users where email='".$email."'";
        $result = $conn->query($sql);
        if ($conn && ($result->num_rows > 0)) 
        {
            // output data of each row
            while($row = $result->fetch_assoc()) 
            {
                $password = $row['password'];
            }
        }

        if (password_verify($passw, $password)) {
            // Store data in session variables
            
            $_SESSION["loggedin"] = true;
            echo '<script type="text/javascript"> window.open("dashboard.php","_self");</script>';
            

        } else {
            echo 'Wrong password!';
        }


        if($uid == 'ben' and $pw == 'ben23')
        {    
            session_start();
            $_SESSION['sid']=session_id();
            echo "Logged in successfully";
        }
    };

}
?>
