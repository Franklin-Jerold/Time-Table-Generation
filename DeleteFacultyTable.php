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
if(isset($_GET['deletern'])){
    $phno=$_GET['deletern'];

    $sql="DELETE from monday";
   
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted Succesfully";
        header('location:Home.html');
    }else{
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    
}
?>