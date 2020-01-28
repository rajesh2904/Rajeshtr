<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}

  </style>
</head>
<body>

</body>
</html>
<?php

  $servername='localhost';
$username='root';
$password='';
$dbname = "today";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
echo "string";
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}
$name=$_POST['EmpId'];
$pass=$_POST['password'];
$result = mysqli_query($conn,"SELECT *FROM helo WHERE username='$name' AND password='$pass'");
?>
<!DOCTYPE html>
<html>
 <head>
 <title> Retrive data</title>
 </head>
<body>
<?php
 {
?>
  <table>
  
  <tr>
    <td>Id</td>
    <td>f-name</td>
    <td>l-name</td>
    <td>Email id</td>
    <td>phone</td>
    <td>college name id</td>
    <td>completion year</td>
    <td>percentage</td>
 <td>School name id</td>
    <td>completion year</td>
    <td>percentage</td>
    <td>School name id</td>
    <td>completion year</td>
    <td>percentage</td> 
    <td>Areaof Interest</td>
    <td>pro 1</td>
    <td>pro 2</td>
  
  
  
  </tr>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["name1"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["phone"]; ?></td>
    <td><?php echo $row["college"]; ?></td>
    <td><?php echo $row["year"]; ?></td>
    <td><?php echo $row["percentage"]; ?></td>
    <td><?php echo $row["school"]; ?></td>
    <td><?php echo $row["year1"]; ?></td>
    <td><?php echo $row["percentage1"]; ?></td>
    <td><?php echo $row["school1"]; ?></td>
    <td><?php echo $row["year2"]; ?></td>
    <td><?php echo $row["percentage2"]; ?></td>
    <td><?php echo $row["aoi"]; ?></td>
    <td><?php echo $row["pro1"]; ?></td>
    <td><?php echo $row["pro2"]; ?></td>


</tr>
<?php
}
?>
</table>
 <?php
}
?>
<button style="margin-left:700px ;margin-top: 50px; width: 120px; height: 50px;"><a href="login.php"> BACK</a></button>
 </body>
</html>