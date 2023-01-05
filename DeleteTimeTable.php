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
    $totalsub=$_GET['deletern'];
   
       $sql= "DELETE from monday, tuesday, wednesday, thursday, friday, saturday
       USING monday, tuesday, wednesday, thursday, friday, saturday
       where monday.totalsub = tuesday.totalsub and tuesday.totalsub = wednesday.totalsub and wednesday.totalsub = thursday.totalsub and thursday.totalsub = friday.totalsub and friday.totalsub = saturday.totalsub
       and monday.totalsub='$totalsub' ";

        $result=mysqli_query($conn,$sql);
        if($result){
        echo '<script>

        if(confirm("Time Table deleted successfully")){
            location.replace("FacultyTimeTable.php");
		}else{
		}
			</script>';
	 } 
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
}
?>