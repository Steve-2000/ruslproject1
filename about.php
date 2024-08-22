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
  <link rel="stylesheet" href="about.css" type="text/css">
 
</head>

 

  <table class="tab">
    <thead>
      <tr>
        <th>Name</th>
        <th>District</th>
        <th>Co No</th>
        <th>Date</th>
        <th>Area</th>
        <th>phonenumber</th>
        <th>bloodgroup</th>


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