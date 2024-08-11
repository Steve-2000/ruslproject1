<?php


include('database.php');
// $district = $_GET["district"];
$sql = "SELECT * FROM users ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
  $tdlist = "";
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
}
?>
<body>



<head>
  <link rel="stylesheet" href="project.css" type="text/css">
  <style>

  .tab{
    width: 80%;
    border-collapse: collapse;
    margin-bottom: 20px;
    border: 2px solid black;
    padding: 40px;
    background-color: lightgray;
  }

  th, td {
    padding: 20px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  th {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f5f5f5;
  }
  </style>
</head>

 

  <table class="tab">
    <thead>
      <tr>
        <th>Name</th>
        <th>District</th>
        <th>Co No</th>
        <th>Date</th>
        <th>Area</th>

        <?php echo $tdlist;?>
      </tr>
    </thead>
    <tbody>
     
      <!-- Add more rows as needed -->
    </tbody>
  </table>

</body>
</html>

</body>