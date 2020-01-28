<!DOCTYPE html>
<html>
  <head>
    <title>Job Application Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #1c87c9; 
      }
     .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/02/fb57ab781c34da322c884532bfec751e843e36fc.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1e6fa0;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="reg.php" method="POST">
        <div class="banner">
          <h1>Job Application Form</h1>
        </div>
<div class="item">
          <p>Username<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="user" placeholder="xyz" required/>
            
          </div>
        </div><div class="item">
          <p>password<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="pwd" placeholder="***********" required/>
            
          </div>
        </div>
        <div class="item">
          <p>Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="name" placeholder="First" required/>
            <input type="text" name="name1" placeholder="Last" required/>
          </div>
        </div>
        <div class="contact-item">
          <div class="item">
            <p>Email<span class="required">*</span></p>
            <input type="text" name="email" required/>
          </div>
          <div class="item">
            <p>Phone<span class="required">*</span></p>
            <input type="text" name="phone" required/>
          </div>
        </div>
        <div class="item">
          <p>Educational Qualification<span class="required">*</span></p>
<br>
          <p>College<span class="required">*</span></p>
          <div class="contact-item">
          <div class="item">
            <p>Institution<span class="required">*</span></p>
            <input type="text" name="college" required/>
          </div>
          <div class="item">
            <p>Year of completion<span class="required">*</span></p>
            <input type="text" name="year" required/>
          </div>
           <div class="item">
            <p>Percentage<span class="required">*</span></p>
            <input type="text" name="percentage" required/>
          </div>
        </div>
          <br>
          <p>SSLC<span class="required">*</span></p>
          <div class="contact-item">
          <div class="item">
            <p>Institution<span class="required">*</span></p>
            <input type="text" name="school" required/>
          </div>
          <div class="item">
            <p>Year of completion<span class="required">*</span></p>
            <input type="text" name="year1" required/>
          </div>
           <div class="item">
            <p>Percentage<span class="required">*</span></p>
            <input type="text" name="percentage1" required/>
          </div>
        </div>
          <br>
          <p>HSC<span class="required">*</span></p>
          <div class="contact-item">
          <div class="item">
            <p>Institution<span class="required">*</span></p>
            <input type="text" name="school1" required/>
          </div>
          <div class="item">
            <p>Year of completion<span class="required">*</span></p>
            <input type="text" name="year2" required/>
          </div>
           <div class="item">
            <p>Percentage<span class="required">*</span></p>
            <input type="text" name="percentage2" required/>
          </div>
        </div>
         <div class="item">
           <p>Area of intrest<span class="required">*</span></p>
          <div class="name-item">
            <TEXTAREA  rows="4" cols="60" name="aoi"placeholder="eg:basics of c,c++,python,etc..
          " required/></TEXTAREA> 
            
          </div>
        </div>
<div class="item">
          <p>Skill sets<span class="required">*</span></p>
          <div class="name-item">
            <TEXTAREA  rows="4" cols="60" name="pro1"placeholder="eg:basics of c,c++,python,etc..
          " required/></TEXTAREA> 
            
          </div>
        </div>
      </div>

        <div class="item">
          <p>Projects Description<span class="required">*</span></p>
          <div class="name-item">
            <TEXTAREA rows="4" cols="60" name="pro2" placeholder="project 1"
           required/></TEXTAREA>
           </div>
           
            
         
        </div>
        
         <TEXTAREA rows="4" cols="60" name="name2" placeholder="project 2" required/>
          </TEXTAREA>
        
        </div>

        <div class="btn-block">
          <button type="submit"onclick="myFunction()" name="save"> SUBMIT</button>
        </div>
        <div class="btn-block">
          <button><a href="login.php"> BACK</a></button>
        </div>
        
      </form>
    </div>
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


if(isset($_POST['save']))
{  

   $a2 = $_POST['user'];
   $a3 = $_POST['pwd'];
   $a4 = $_POST['name'];
   $a5 = $_POST['name1'];
   $a6 = $_POST['email'];
   $a7 = $_POST['phone'];
   $a8 = $_POST['college'];
   $a9 = $_POST['year'];
   $a10 = $_POST['percentage'];
   $a11 = $_POST['school'];
   $a12 = $_POST['year1'];
   $a13 = $_POST['percentage1'];
   $a14 = $_POST['school1'];
   $a15 = $_POST['year2'];
   $a16 = $_POST['percentage2'];
   $a17 = $_POST['aoi'];
   $a18 = $_POST['pro1'];
   $a19 = $_POST['pro2'];
   $a20 = $_POST['name2'];

$duplicate=mysqli_query($conn,"select * from helo where username='$a2' or name='$a4'");
if (mysqli_num_rows($duplicate)>0)
{
//header("Location: index.php?message=User name or Email id already exists.");
}
else{
   
   $sql = "INSERT INTO helo (username,password,name,name1,email,phone,college,year,percentage,school,year1,percentage1,school1,year2,percentage2,aoi,skill,pro1,pro2)
   VALUES ('$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10','$a11','$a12','$a13','$a14','$a15','$a16','$a17','$a18','$a19','$a20')";
   
echo "1";
   if (mysqli_query($conn, $sql)) {
    echo "New record created successfully !";

   } else {
    echo "Error: " . $sql . "
" . mysqli_error($conn);
   }
 }
   mysqli_close($conn);
}
?>

 
  
  
  
  
  
  
  
  
  

