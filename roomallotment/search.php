<html>
    <style>
    select
        {
            text-align-last:center;
        }
        </style>
    <head>
	<title>Welcome Roomie!!!</title>
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
<body align="center">
    <h1 style="font-family:verdana;">Welcome to the Official Roomie search portal of VIT</h1>
    <div style="width:600px; margin: 0 auto;" >
        <br/>
        <br/>
    <h4 style="font-family:verdana;">Based on your preffered room and your preferred number of partners, you can search for others and share rooms with them by contacting and communicating with them via email.</h4>
    </div>
    <br/>
    <form method="post" action="search.php">
        <b style="font-size:20px;">Preffered type of room:</b><br/><br/>
        <select name="rooms">
            <option value="">Select the type of room</option>
            <option value="2-bedded rooms">Two-bedded</option>
            <option value="3-bedded rooms">Three-bedded</option>
            <option value="4-bedded rooms">four-bedded</option>
            <option value="6-bedded rooms">six-bedded</option>
            <option value="2-bedded A/C rooms">Two-bedded A/C</option>
            <option value="3-bedded A/C rooms">Three-bedded A/C</option>
            <option value="4-bedded A/C rooms">four-bedded A/C</option>
            <option value="6-bedded A/C rooms">six-bedded A/C</option>
            <option value="all types of rooms">All types of rooms</option>
        </select>
        <br/>
        <br/><b style="font-size:20px;">
        Number of partners:</b><br/><br/>
            <select name="partner">
            <option value="">Select number of partners</option>
            <option value=1>1 partner</option>
            <option value=2>2 partners</option>
            <option value=3>3 partners</option>
            <option value=4>4 partners</option>
            <option value=5>5 partners</option>
            <option value="any number of">Any number of partners</option>
        </select>
        <br/><br/>
        <input type="submit" name="search" value="Search" style="margin:0 auto;">
        <p style="color:red; font-size:20px;">
            <br/><b>**Selecting both the above fields is necessary to see the results**</b></p>
    </form>
    <?php include('search_server.php') ?>
    </body>
</html>
