<?php
include('database.php');

// Get the district from the URL
$district = isset($_GET["district"]) ? $_GET["district"] : '';
$tdlist = "";

// Prepare and execute SQL query
$sql = "SELECT * FROM hospital WHERE district = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $district);
$stmt->execute();
$result = $stmt->get_result();

// Check if data is available
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $name = $row['name'];
        $date = $row['date'];
        $area = $row['area'];
        $district = $row['district'];
        $contactnumber = $row['contactNumber'];
        $tdlist .= "<tr>
        <td>{$name}</td>
        <td>{$district}</td>
        <td>{$contactnumber}</td>
        <td>{$date}</td>
        <td>{$area}</td>
        </tr>";
    }
} else {
    $noDataMessage = "No data available for the selected district.";
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hospital Details</title>
  <link rel="stylesheet" href="project.css" type="text/css">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #ffffff;
      margin: 0;
      padding: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      box-sizing: border-box;
    }

    h2 {
      color: #009688;
      text-transform: uppercase;
      margin-bottom: 20px;
      letter-spacing: 2px;
      font-weight: bold;
      text-align: center;
    }

    .tab {
      width: 90%;
      max-width: 1000px;
      border-collapse: collapse;
      background-color: #ffffff;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      margin-top: 20px;
    }

    .tab:hover {
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #eaeaea;
    }

    th {
      background-color: #009688;
      color: white;
      font-weight: bold;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    td {
      color: #555;
      font-size: 16px;
    }

    tr:hover {
      background-color: #f9f9f9;
      cursor: pointer;
    }

    .no-data-message {
      color: #d32f2f;
      text-align: center;
      margin: 20px;
      font-weight: bold;
      font-size: 18px;
    }

    .table-container {
      width: 100%;
      max-width: 1200px;
      padding: 20px;
      margin: 20px 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>
  <div class="table-container">
    <h2>Hospital Details</h2>
    <table class="tab">
      <thead>
        <tr>
          <th>Name</th>
          <th>District</th>
          <th>Contact Number</th>
          <th>Date</th>
          <th>Area</th>
        </tr>
      </thead>
      <tbody>
        <?php
          if (isset($noDataMessage)) {
              echo "<tr><td colspan='5' class='no-data-message'>{$noDataMessage}</td></tr>";
          } else {
              echo $tdlist;
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
