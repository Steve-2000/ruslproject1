<?php
session_start();
include('database.php');
date_default_timezone_set('Asia/Colombo');

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $district = $_POST['district'];
    $contactNumber = $_POST['phone'];
    $date = $_POST['date'];
    $area = $_POST['area'];

    // Insert into the hospital table with correct column names
    $sql = "INSERT INTO hospital (name, district, date, area, contactNumber) 
             VALUES ('$name', '$district', '$date', '$area', '$contactNumber')";
    
    if($conn->query($sql) === TRUE){
        echo "<script>window.history.back()</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
