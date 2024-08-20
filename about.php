<?php
include('database.php');

// Fetch users data from the database
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$tdlist = ""; // Initialize the variable to store table rows

if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $name = $row['name'];
        $age = $row['age'];
        $gender = $row['gender'];
        $district = $row['district'];
        $email = $row['email'];
        $phone = $row['phone'];
        $bloodgroup = $row['bloodgroup'];
        $tdlist .= "<tr>
            <td>{$name}</td>
            <td>{$age}</td>
            <td>{$gender}</td>
            <td>{$district}</td>
            <td>{$email}</td>
            <td>{$phone}</td>
            <td>{$bloodgroup}</td>
        </tr>";
    }
} else {
    $tdlist = "<tr><td colspan='7'>No data available</td></tr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="project.css" type="text/css">
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background-color: #fef6f6;
            color: #333;
            padding: 20px;
        }

        .tab {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #ff8c8c;
            color: #fff;
            font-size: 18px;
            border-bottom: 2px solid #e07b7b;
        }

        td {
            background-color: #fff;
            color: #555;
        }

        tr:nth-child(even) td {
            background-color: #f9e0e0;
        }

        tr:hover {
            background-color: #ffd1d1;
        }

        table caption {
            font-size: 24px;
            font-weight: bold;
            margin: 10px 0;
            color: #ff6b6b;
        }

        .no-data {
            text-align: center;
            font-size: 18px;
            color: #ff6b6b;
        }
    </style>
</head>
<body>

    <table class="tab">
        <caption>User Data</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>District</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Blood Group</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $tdlist; ?>
        </tbody>
    </table>

</body>
</html>
