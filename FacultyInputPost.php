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

            /* MONDAY */
if(isset($_POST['submitMon']))
{	
     $name = $_POST['facultyname'];
     $semester = $_POST['semester'];
     $totalsub = $_POST['totalsub'];
     
     $h1subcode = $_POST['subcodeH1Mon'];
     $h1subtitle = $_POST['subtitleH1Mon'];
     $h2subcode = $_POST['subcodeH2Mon'];
     $h2subtitle = $_POST['subtitleH2Mon'];
     $h3subcode = $_POST['subcodeH3Mon'];
     $h3subtitle = $_POST['subtitleH3Mon'];
     $h4subcode = $_POST['subcodeH4Mon'];
     $h4subtitle = $_POST['subtitleH4Mon'];
     $h5subcode = $_POST['subcodeH5Mon'];
     $h5subtitle = $_POST['subtitleH5Mon'];
   

     $sql_query = "INSERT INTO monday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
	 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";

     


if (mysqli_query($conn,$sql_query)) 
{
    echo'<script>
    if(confirm("New Details Enterd Successfully !!")){
        location.replace("FacultyInput.php");
    }else{
    }
        </script>';
} 
else
{
   echo "Error: " . $sql . "" . mysqli_error($conn);
}
}

            /* TUESDAY */
            if(isset($_POST['submitTue']))
            {	
                 $name = $_POST['facultyname'];
                 $semester = $_POST['semester'];
                 $totalsub = $_POST['totalsub'];
                 
                 $h1subcode = $_POST['subcodeH1Tue'];
                 $h1subtitle = $_POST['subtitleH1Tue'];
                 $h2subcode = $_POST['subcodeH2Tue'];
                 $h2subtitle = $_POST['subtitleH2Tue'];
                 $h3subcode = $_POST['subcodeH3Tue'];
                 $h3subtitle = $_POST['subtitleH3Tue'];
                 $h4subcode = $_POST['subcodeH4Tue'];
                 $h4subtitle = $_POST['subtitleH4Tue'];
                 $h5subcode = $_POST['subcodeH5Tue'];
                 $h5subtitle = $_POST['subtitleH5Tue'];
               
            
                 $sql_query = "INSERT INTO tuesday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
                 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";
            
                 
        
            
            if (mysqli_query($conn, $sql_query)) 
            {
                echo'<script>
                if(confirm("New Details Enterd Successfully !!")){
                    location.replace("FacultyInput.php");
                }else{
                }
                    </script>';
            } 
            else
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }    

            
            /* WEDNESDAY */
            if(isset($_POST['submitWed']))
            {	
                 $name = $_POST['facultyname'];
                 $semester = $_POST['semester'];
                 $totalsub = $_POST['totalsub'];
                 
                 $h1subcode = $_POST['subcodeH1Wed'];
                 $h1subtitle = $_POST['subtitleH1Wed'];
                 $h2subcode = $_POST['subcodeH2Wed'];
                 $h2subtitle = $_POST['subtitleH2Wed'];
                 $h3subcode = $_POST['subcodeH3Wed'];
                 $h3subtitle = $_POST['subtitleH3Wed'];
                 $h4subcode = $_POST['subcodeH4Wed'];
                 $h4subtitle = $_POST['subtitleH4Wed'];
                 $h5subcode = $_POST['subcodeH5Wed'];
                 $h5subtitle = $_POST['subtitleH5Wed'];
               
            
                 $sql_query = "INSERT INTO wednesday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
                 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";
            
                 
            
            
            if (mysqli_query($conn, $sql_query)) 
            {
                echo '<script>
                if(confirm("New Details Enterd Successfully !!")){
                    location.replace("FacultyInput.php");
                }else{
                }
                    </script>';
            } 
            else
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }

            
            /* THURSDAY */
            if(isset($_POST['submitThu']))
            {	
                 $name = $_POST['facultyname'];
                 $semester = $_POST['semester'];
                 $totalsub = $_POST['totalsub'];
                 
                 $h1subcode = $_POST['subcodeH1Thu'];
                 $h1subtitle = $_POST['subtitleH1Thu'];
                 $h2subcode = $_POST['subcodeH2Thu'];
                 $h2subtitle = $_POST['subtitleH2Thu'];
                 $h3subcode = $_POST['subcodeH3Thu'];
                 $h3subtitle = $_POST['subtitleH3Thu'];
                 $h4subcode = $_POST['subcodeH4Thu'];
                 $h4subtitle = $_POST['subtitleH4Thu'];
                 $h5subcode = $_POST['subcodeH5Thu'];
                 $h5subtitle = $_POST['subtitleH5Thu'];
               
            
                 $sql_query = "INSERT INTO thursday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
                 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";
            
                 
            
            
            if (mysqli_query($conn, $sql_query)) 
            {
                echo '<script>
                if(confirm("New Details Enterd Successfully !!")){
                    location.replace("FacultyInput.php");
                }else{
                }
                    </script>';
                    
            } 
            else
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }

            
            /* FRIDAY */
            if(isset($_POST['submitFri']))
            {	
                 $name = $_POST['facultyname'];
                 $semester = $_POST['semester'];
                 $totalsub = $_POST['totalsub'];
                 
                 $h1subcode = $_POST['subcodeH1Fri'];
                 $h1subtitle = $_POST['subtitleH1Fri'];
                 $h2subcode = $_POST['subcodeH2Fri'];
                 $h2subtitle = $_POST['subtitleH2Fri'];
                 $h3subcode = $_POST['subcodeH3Fri'];
                 $h3subtitle = $_POST['subtitleH3Fri'];
                 $h4subcode = $_POST['subcodeH4Fri'];
                 $h4subtitle = $_POST['subtitleH4Fri'];
                 $h5subcode = $_POST['subcodeH5Fri'];
                 $h5subtitle = $_POST['subtitleH5Fri'];
               
            
                 $sql_query = "INSERT INTO friday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
                 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";
            
                 
            
            
            if (mysqli_query($conn, $sql_query)) 
            {
                echo '<script>
                if(confirm("New Details Enterd Successfully !!")){
                    location.replace("FacultyInput.php");
                }else{
                }
                    </script>';
            } 
            else
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
        }

            
            /* SATURDAY */
            if(isset($_POST['submitSat']))
            {	
                 $name = $_POST['facultyname'];
                 $semester = $_POST['semester'];
                 $totalsub = $_POST['totalsub'];
                 
                 $h1subcode = $_POST['subcodeH1Sat'];
                 $h1subtitle = $_POST['subtitleH1Sat'];
                 $h2subcode = $_POST['subcodeH2Sat'];
                 $h2subtitle = $_POST['subtitleH2Sat'];
                 $h3subcode = $_POST['subcodeH3Sat'];
                 $h3subtitle = $_POST['subtitleH3Sat'];
                 $h4subcode = $_POST['subcodeH4Sat'];
                 $h4subtitle = $_POST['subtitleH4Sat'];
                 $h5subcode = $_POST['subcodeH5Sat'];
                 $h5subtitle = $_POST['subtitleH5Sat'];
               
            
                 $sql_query = "INSERT INTO saturday (name,semester,totalsub,h1subcode,h1subtitle,h2subcode,h2subtitle,h3subcode,h3subtitle,h4subcode,h4subtitle,h5subcode,h5subtitle)
                 VALUES (' $name','$semester','$totalsub','$h1subcode','$h1subtitle','$h2subcode','$h2subtitle','$h3subcode','$h3subtitle','$h4subcode','$h4subtitle','$h5subcode','$h5subtitle')";
            
                 
            
            
            if (mysqli_query($conn, $sql_query)) 
            {
               
 echo '<script>
 if(confirm("New Details Enterd Successfully !!")){
     location.replace("FacultyInput.php");
 }else{
 }
     </script>';
            } 
            else
            {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }

        

	 mysqli_close($conn);

}
?>



