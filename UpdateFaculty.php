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
$p_no=$_GET['updatern'];
$sql="SELECT * from faculty where contact=$p_no";
$result=mysqli_query($conn,$sql);
$rows=mysqli_fetch_assoc($result);
$id=$rows['id'];
$name=$rows['name'];
$gender=$rows['gender'];
$mail=$rows['mail'];
$contact=$rows['contact'];
$department=$rows['department'];


if(isset($_POST['submit']))
{	
    $id = $_POST['idnum'];
    $name = $_POST['name'];

    $gender =$_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['phno'];
    $department = $_POST['department'];

	 $sql_query = "UPDATE faculty set contact='$contact', id='$id',name='$name',gender='$gender',mail='$email',contact='$contact',department='$department' where contact='$p_no'";
	 
$result=mysqli_query($conn, $sql_query);
if($result){
    //echo "updated";
    header('location:ViewFaculty.php');
 }
 else{
    die(mysqli_error($conn));
 }
 mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SJU/Update Faculty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Addfaculty.css">
    <link rel="icon" href="images/logo.png">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-ligth bg-# ">
        <div class="container-fluid">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class=" nav-item">
                        <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">TimeTable</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Faculty
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Addfaculty.html">Add Faculty</a></li>
                            <li><a class="dropdown-item" href="ViewFaculty.php" target="_blank">View Faculty</a></li>
                            <li><a class="dropdown-item" href="FacultyTimeTable.php" target="_blank">Faculty
                                    TimeTable</a></li>

                        </ul>
                    </li>

            </div>
        </div>
    </nav>

    <div class="conatinertop">
        <h1>Update Faculty</h1>

        <div class="container">
            <form  method="post" class="row g-3 my-1">
                <div class="col-md-2 form">
                    <label for="id" class="form-label">ID no: </label>
                    <input type="number" class="form-control" id="nameno" name="idnum" required value=<?php echo $id; ?> > 
                </div>
                <div class="col-md-2 form">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" name="name" required value=<?php echo "'$name','$name'"; ?> >
                </div>

                <div class="col-md-3 form">
                    <label class="form-label">Gender</label>
                    <select id="gender" class="form-select" name="gender" required>

                        <option value="">Select</option>
                        <option value="Male"
                        <?php 
                         if($gender =='Male'){
                            echo "selected";
                            }
                            ?>>Male</option>
                        <option value="Female"
                        <?php 
                         if($gender =='Female'){
                            echo "selected";
                            }
                            ?>>Female</option>

                    </select>
                </div>
                <div class="col-md-3 form">
                    <label for="email">Mail ID: </label>
                    <input type="email" class="form-control" id="email" name="email"  value=<?php echo $mail;?>>
                </div>
                <div class="col-md-3 form">
                    <label class="form-label">Contact</label>
                    <input type="number" id="phno" class="form-control" name="phno" placeholder="+91 " required value=<?php echo $contact;?>>
                </div>

                <div class="col-md-3 form">
                    <label class="form-label">Department</label>
                    <select id="department" class="form-select" name="department" required>

                        <option value=""></option>
                        <option value="Computer Application"
                        <?php
                    if($department =='Computer Application'){
                    echo "selected";
                    }
                    ?>>Computer Application </option>

                        <option value="Advanced Computing"
                        <?php
                    if($department =='Advanced Computing'){
                    echo "selected";
                    }
                    ?>>Advanced Computing</option>


                    </select>
                </div>


                <div class="col-12">
                    <button type="submit" class="btn btn-dark" id="submit" name="submit">Update Faculty</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>