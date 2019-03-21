<?php
$conn=mysqli_connect("localhost","root","","vitreg");
$username="";
$rooms="";
$cgpa="";
$partner="";
$reg_no="";
$email="";
$counter=0;
if(isset($_POST['search'])){
$rooms=$_POST['rooms'];
$partner=$_POST['partner'];
  $eligible_students=mysqli_query($conn,"SELECT * FROM vedu WHERE rooms='$rooms' and partner='$partner'");
    if($rooms=="all types of rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu");
    }
    if($rooms=="all types of rooms" && $partner=="2")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms and partner='$partner'");
    }
    if($rooms=="all types of rooms" && $partner=="3")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms and partner='$partner'");
    }
    if($rooms=="all types of rooms" && $partner=="4")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms and partner='$partner'");
    }
    if($rooms=="all types of rooms" && $partner=="5")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms and partner='$partner'");
    }
    if($rooms=="2-bedded rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="3-bedded rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="4-bedded rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="6-bedded rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="2-bedded A/C rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="3-bedded A/C rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="4-bedded A/C rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="6-bedded A/C rooms" && $partner=="any number of")
    {
       $eligible_students=mysqli_query($conn,"SELECT * FROM vedu where rooms='$rooms' and partner");
    }
    if($rooms=="" && $partner=="")
    {
      echo ("<p style='color:red; font-size:20px;'><b> You need to specify your query in order to get some result!!!</b></p>");
    }
    ?>
<!DOCTYPE html>
<html>
    <body>
        <head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
        <div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
        <h1 style="font-family:verdana;"> Search results matching your input are:</h1>
                    <br/>
        <table border=2 data-vertable="ver1">
          <tr>
                <th class="column100 column1" data-column="column1">Serial number</th>
                <th class="column100 column2" data-column="column2">Register number</th>
                <th class="column100 column3" data-column="column3">CGPA</th>
                <th class="column100 column4" data-column="column4">Room-type</th>
                <th class="column100 column5" data-column="column5">Partners required</th>
                <th class="column100 column6" data-column="column6">Email</th>
            </tr>
            <?php
while($row=mysqli_fetch_array($eligible_students)){
    $reg_no=$row["username"];
    $cgpa=$row["CGPA"];
    $rooms=$row["rooms"];
    $partner=$row["partner"];
    $email=$row["email"];
?>              
            <tr align="center" class="row100">
                <td class="column100 column1" data-column="column1"><?php echo ++$counter ?></td>
                <td class="column100 column2" data-column="column2"><?php echo $reg_no ?></td>
                <td class="column100 column3" data-column="column3"><?php echo $cgpa ?></td>
                <td class="column100 column4" data-column="column4"><?php echo $rooms ?></td>
                <td class="column100 column5" data-column="column5"><?php echo $partner ?></td>
                <td class="column100 column6" data-column="column6"><?php echo $email ?></td>
            </tr>
            <?php }?>
        </table>
        </div>
        <b style="color:red; font-size:20px; ">Total of <?php echo $counter ?> result(s) match your search query</b>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="js/main.js"></script>
<?php }?>
