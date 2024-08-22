<?php
session_start();
include('database.php');
date_default_timezone_set('Asia/Colombo');

// Handle Registration
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $district = $_POST['district'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $pwd = $_POST['pwd'];
    $bloodgroup = $_POST['bloodgroup'];

    // Hash the password
    $hash = password_hash($pwd, PASSWORD_DEFAULT);

    // Insert into the database
    $sqli = "INSERT INTO users (name, age, gender, district, email, phone, pasword, bloodgroup) 
             VALUES ('$name', $age, '$gender', '$district', '$email', '$phone', '$hash', '$bloodgroup')";
    
    if ($conn->query($sqli) === TRUE) {
        echo "<script>window.history.back()</script>";
    } else {
        echo "Error: " . $sqli . "<br>" . $conn->error;
    }
}

// Handle Login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    // Prepare SQL statement
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetch user details
        $row = $result->fetch_assoc();
        $storedPassword = $row['pasword'];
        $id = $row['id'];

        // Verify password
        if (password_verify($pwd, $storedPassword)) {
            $_SESSION['AddStatusAdmin'] = $id;
            header("Location: about.php");
            exit(); // Ensure no further code execution after redirection
        } else {
            echo "<script>alert('Invalid credentials.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('User not found.'); window.history.back();</script>";
    }
}
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
