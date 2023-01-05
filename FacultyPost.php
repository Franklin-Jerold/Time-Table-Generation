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


if(isset($_POST['submit']))
{	
    $id = $_POST['idnum'];
    $name = $_POST['name'];
    $gender =$_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['phno'];
    $department = $_POST['department'];

	 $sql_query = "INSERT INTO faculty (id,name,gender,mail,contact,department)
	 VALUES (' $id','$name','$gender','$email','$contact','$department')";

	 if (mysqli_query($conn, $sql_query)) 
	 {
        echo '<script>
        if(confirm("New Faculty Added Successfully !!")){
            location.replace("Addfaculty.html");
        }else{
        }
            </script>';
	 } 
	 else
     {
		echo '<script>
        if(confirm("New Faculty Added Successfully !!")){
            location.replace("Addfaculty.html");
        }else{
        }
            </script>';
	 }
	 mysqli_close($conn);
}
?>