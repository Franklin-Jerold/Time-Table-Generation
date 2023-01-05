<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="timetable";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
	die("Connection Failed:" . mysqli_connect_error());

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SJU/View Faculty</title>
    <link rel="icon" href="images/logo.png">
    
    <style>
         body{
            background-color: #ffff;
            font-family: sans-serif;
        }
        .searchbar{
            position: absolute;
            left:83%;
            bottom:86.5%;
            transform: translate(-50%, -50%);
        }
        input{
            border: 3px solid #32e17c;
            height: 40px;
            width: 200px;
            border-radius: 50px;
            font-size: 15px;
            text-align:center;
        }
        
        .heading{
            font-size: 40px;
            text-align: center;
            margin-bottom: 40px;
        }
    
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
            border-collapse: collapse;
        }
       
        td {
            background-color: #ffff;
            border: 1px solid black;
        }

        th{
            background-color: #ee2828;
            border: 1px solid #dee2e685;
        }
        td {
            font-weight: bold;
            font-size: 17px;
            letter-spacing: 0.35px;
            border: 1px solid #dee2e685;
            color: #f1f1f1;
            background-color: #3c3f44;
            padding: 10px;
            text-align: center;
        }

        td {
            font-weight: lighter;
        }
        a:link {
    color: black;
    background-color: ;
    text-decoration:none;
    
    font-weight: bold;
    font-size: 13px;
    letter-spacing: 0px;
}
a:hover {
    color: red;
    background-color: transparent;
}
button{
    border-radius:500px;
}
    </style>
</head>
<body>
<section>
<h1 class="heading">Faculty Details</h1>

<div class="searchbar">
    <input type="text" name="search" id="Input" placeholder="Search for Name..."  onKeyup = "searchFun()">
</div>
    
        <table class="table" id="Table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Department</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from faculty ORDER BY id ASC";
    $result=mysqli_query($conn,$sql);
    if($result){
        while($rows=mysqli_fetch_assoc($result)){
            
            $id=$rows['id'];
            $name=$rows['name'];
            $gender=$rows['gender'];
            $mail=$rows['mail'];
            $contact=$rows['contact'];
            $department=$rows['department'];
            echo '<tr>
            <td scope="row">'.$id.'</td>
            <td>'.$name.'</td>
            <td>'.$gender.'</td>
            <td>'.$mail.'</td>
            <td>'.$contact.'</td>
            <td>'.$department.'</td>
            <td>
            <button><a href="UpdateFaculty.php?updatern='.$contact.'" >Update</a></button>
            <button><a href="DeleteFaculty.php?deletern='.$contact.'">Delete</a></button>
            </td>
          </tr>';
        }
       
    }
    ?>

                    </tbody>
                </table>
            </div>
        </section>

        <script>
            
const searchFun = () => {
    let filter = document.getElementById('Input').value.toUpperCase();

    let Table = document.getElementById('Table');

    let tr = Table.getElementsByTagName('tr');

    for (var i = 0; i < tr.length; i++) {
        let td = tr[i].getElementsByTagName('td')[1];


        if (td) {
            let textValue = td.textContent || td.innerHTML;

            if (textValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = 'none';
            }

        }
    }

}


        </script>
    </body>
</html>