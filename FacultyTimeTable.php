<!-- PHP code to establish connection with the localserver -->
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is geeksforgeeks
$database = 'timetable';

// Server is localhost with
// port number 3306
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sqlmon = " SELECT * FROM monday ORDER BY h1subcode DESC ";
$resultmon = $mysqli->query($sqlmon);


$sqltue = " SELECT * FROM tuesday ORDER BY h1subcode DESC ";
$resulttue = $mysqli->query($sqltue);

$sqlwed = " SELECT * FROM wednesday ORDER BY h1subcode DESC ";
$resultwed = $mysqli->query($sqlwed);

$sqlthu = " SELECT * FROM thursday ORDER BY h1subcode DESC ";
$resultthu = $mysqli->query($sqlthu);

$sqlfri = " SELECT * FROM friday ORDER BY h1subcode DESC ";
$resultfri = $mysqli->query($sqlfri);

$sqlsat = " SELECT * FROM saturday ORDER BY h1subcode DESC ";
$resultsat = $mysqli->query($sqlsat);
$mysqli->close();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Faculty Time-Table</title>
   
    
    <link rel="icon" href="images/logo.png">

    <style>
        h2 {
            text-align: center;
            padding-top: 30px;
        }

        h3 {
            text-align: center;
            font-size: larger;
            padding-bottom:25px;
        }

        #h4Sem {
            font-size:17px;
            padding-top: 15px;
            margin-left: 170px;
        }

        #h4class {
            font-size:17px;
            margin-top: -30px;
            margin-left: 720px;
        }

        .Body-top {
            padding-top: 80px;
            display: flex;
            margin-left: 200px;

        }

        td {
            text-transform: uppercase;
            width:110px;
        }

        #delete{
            margin-top:-5px;
            margin-left:-100px;
            height:30px;
            
            
        }
        #download{
            margin-top: 20px;
            margin-left:10px;
        }
a{
    text-decoration:none;
    font-size:14px;
}
        button {
            background-color: #fff;
            color: black;
            border: 2px solid #4caf50;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4caf50;
        }
    </style>
</head>


<body id="body">
 



    <div class="container" id="body" >
<h2>INSTITUTE OF INFORMATION TECHNOLOGY</h2>
<?php 
while($rowsmon=$resultmon->fetch_assoc())

{ 
    $totalsub = $rowsmon['totalsub'];
    ?>
<h3>FACULTY TIME TABLE FOR <?php

    
echo $rowsmon['semester'];
?>
 SEMESTER </h3>
</h3>


<table border="5" cellspacing="0" align="center">

   
   <h4 id="h4Sem"> SUBJECTS :<?php echo $rowsmon['totalsub'];?></h4>
   <h4 id="h4class"> NAME :<?php echo $rowsmon['name'];?></h4>
    
        <tr>
            <td align="center" height="50" width="100"><br>
                <b>Day/Time</b></br>
            </td>
            <td align="center" height="50" width="100">
                <b>I<br>9:30-10:20</b>
            </td>
            <td align="center" height="50" width="100">
                <b>II<br>10:20-11:10</b>
            </td>
            <td align="center" height="50" width="100">
                <b>III<br>11:10-12:00</b>
            </td>
            <td align="center" height="50" width="100">
                <b><br>12:00-12:40</b>
            </td>
            <td align="center" height="50" width="100">
                <b>IV<br>12:40-1:30</b>
            </td>
            <td align="center" height="50" width="100">
                <b>V<br>1:30-2:20</b>
            </td>

        </tr>
       
        <tr>
            <td align="center" height="50">
                <b>Monday</b>
            </td>
            <td align="center" height="50"><?php echo $rowsmon['h1subcode'];  echo "</br>";  echo $rowsmon['h1subtitle'];?></td>
            
            <td align="center" height="50"><?php echo $rowsmon['h2subcode'];  echo "</br>"; echo $rowsmon['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsmon['h3subcode'];  echo "</br>"; echo $rowsmon['h3subtitle'];?></td>
            <td rowspan="6" align="center" height="50">
                <h2>L<br><br>U<br><br>N<br><br>C<br><br>H</h2>
            </td>
            <td align="center" height="50"><?php echo $rowsmon['h4subcode'];  echo "</br>"; echo $rowsmon['h4subtitle'];?></td>
            <td colspan="2" align="center" height="50"><?php echo $rowsmon['h5subcode'];  echo "</br>"; echo $rowsmon['h5subtitle'];?></td>

        </tr>
        <?php
                }
                ?>
    

    <?php
    while($rowstue=$resulttue->fetch_assoc())
   {
    $totalsub2 = $rowstue['totalsub'];
    ?>

        <tr>
        <td align="center" height="50">
                <b>Tuesday</b>
            </td>
            <td align="center" height="50"><?php echo $rowstue['h1subcode'];  echo "</br>"; echo $rowstue['h1subtitle'];?></td>
            
            <td align="center" height="50"><?php echo $rowstue['h2subcode'];  echo "</br>"; echo $rowstue['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowstue['h3subcode'];  echo "</br>"; echo $rowstue['h3subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowstue['h4subcode'];  echo "</br>"; echo $rowstue['h4subtitle'];?></td>
            <td colspan="2" align="center" height="50"><?php echo $rowstue['h5subcode'];  echo "</br>"; echo $rowstue['h5subtitle'];?></td>

        </tr>
        <?php
   }
   ?>

   <?php
    while($rowswed=$resultwed->fetch_assoc())
   {
    ?>
        <tr>

            <td align="center" height="50">
                <b>Wednesday</b>
            </td>
            <td align="center" height="50"><?php echo $rowswed['h1subcode'];  echo "</br>"; echo $rowswed['h1subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowswed['h2subcode'];  echo "</br>"; echo $rowswed['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowswed['h3subcode'];  echo "</br>"; echo $rowswed['h3subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowswed['h4subcode'];  echo "</br>"; echo $rowswed['h4subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowswed['h5subcode'];  echo "</br>"; echo $rowswed['h5subtitle'];?></td>
            </td>
            </td>


        </tr>
<?php
   }
   ?>

   <?php
    while($rowsthu=$resultthu->fetch_assoc())
   {

   ?>

        <tr>
            <td align="center" height="50">
                <b>Thursday</b>
            </td>
            <td align="center" height="50"><?php echo $rowsthu['h1subcode'];  echo "</br>"; echo $rowsthu['h1subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsthu['h2subcode'];  echo "</br>"; echo $rowsthu['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsthu['h3subcode'];  echo "</br>"; echo $rowsthu['h3subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsthu['h4subcode'];  echo "</br>"; echo $rowsthu['h4subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsthu['h5subcode'];  echo "</br>"; echo $rowsthu['h5subtitle'];?></td>
            </td>

        </tr>

        <?php
   }
   ?>

   <?php
    while($rowsfri=$resultfri->fetch_assoc())
    {

    ?>
        <tr>
            <td align="center" height="50">
                <b>Friday</b>
            </td>
            <td align="center" height="50"><?php echo $rowsfri['h1subcode'];  echo "</br>"; echo $rowsfri['h1subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsfri['h2subcode'];  echo "</br>"; echo $rowsfri['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsfri['h3subcode'];  echo "</br>"; echo $rowsfri['h3subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsfri['h4subcode'];  echo "</br>"; echo $rowsfri['h4subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowsfri['h5subcode'];  echo "</br>"; echo $rowsfri['h5subtitle'];?></td>
            </td>
           

        </tr>
        <?php
    }
    ?>

    <?php
    while($rowssat=$resultsat->fetch_assoc())
    {

    ?>
        <tr>
            <td align="center" height="50">
                <b>Saturday</b>
            </td>
            <td align="center" height="50"><?php echo $rowssat['h1subcode'];  echo "</br>"; echo $rowssat['h1subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowssat['h2subcode'];  echo "</br>"; echo $rowssat['h2subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowssat['h3subcode'];  echo "</br>"; echo $rowssat['h3subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowssat['h4subcode'];  echo "</br>"; echo $rowssat['h4subtitle'];?></td>
            <td align="center" height="50"><?php echo $rowssat['h5subcode'];  echo "</br>"; echo $rowssat['h5subtitle'];?></td>
            </td>

        </tr>
        
    

    </table>

    <?php
        echo'<button id="delete" class="btn btn-danger"><a id="a" href="DeleteTimeTable.php?deletern='.$totalsub.'?" class="text-light">Delete</a></button>';
				}
			?>
<button id="download"> Download pdf</button>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
<script src="downlaod.js"> </script>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>