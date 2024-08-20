<?php
session_start();
include('database.php');
date_default_timezone_set('Asia/Colombo');
$date = date("Y-m-d");
$date_with_time = date("Y-m-d h:i");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['pwd'];
    $bloodgroup = $_POST['bloodgroup']; // Add this line to capture the blood group

    // Hash the password
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    // Insert into the database
    $sqli = "INSERT INTO users (name, age, gender, district, email, phone, pasword, bloodgroup) 
             VALUES ('$name', $age, '$gender', '$district', '$email', '$phone', '$hash', '$bloodgroup')";
    
    if($conn->query($sqli) === TRUE){
        echo "<script>window.history.back()</script>";
    } else {
        echo "Error: " . $sqli . "<br>" . $conn->error;
    }
}

if(isset($_POST['login'])){
    $username = $_POST['email'];
    $pwd = $_POST['pwd'];
    $sql = "SELECT * FROM users WHERE email = '{$username}'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $pasword = $row['pasword'];
            $id = $row['id'];
        }
        $verifypwd = password_verify($pwd, $pasword);
        if($verifypwd){
            $_SESSION['AddStatusAdmin'] = $id;
            header("Location:about.php");
        }
        else{
            echo "<script>window.history.back()</script>";
        }
    }
    else{
        echo "<script>window.history.back()</script>";
    }
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
