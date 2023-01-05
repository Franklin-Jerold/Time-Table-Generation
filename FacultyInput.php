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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Input</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="FacultyInput.css">
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
                        <a class="nav-link" href="FacultyInput.html" >TimeTable</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Faculty
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="Addfaculty.html">Add Faculty</a></li>
                            <li><a class="dropdown-item" href="ViewFaculty.php" target="_blank">View Faculty</a></li>
                            <li><a class="dropdown-item" href="FacultyTimeTable.php" target="_blank">Faculty TimeTable</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <h2>Time-Table Generation</h2>


    <div class="container">
        <form action="FacultyInputPost.php" method="post">
            <div class="col-md-2 inputs topinputs" id="semester">
                <label for="inputState" class="form-label">Semester</label>
                <select id="inputState" class="form-select" name="semester">

                    <option selected>Select</option>
                   <option> ODD </option>
                   <option> EVEN </option>
                </select>
            </div>

            <div class="col-md-3 inputs" id="faculty">
                <label for="inputState" class="form-label">Faculty</label>
                <select id="inputState" class="form-select" name="facultyname" required>
                    <option selected>Select...</option>

                    <?php
                         $sql="SELECT * from faculty";
                         $result=mysqli_query($conn,$sql);
                        if($result){
                             while($rows=mysqli_fetch_assoc($result)){
            
                                 $name=$rows['name'];
                                echo '<option>'.$name.'</option>';
                              }
       
                             }
                            ?>
                </select>
            </div>

            <div class="col-md-1" id="totalsub">
                <label for="inputState" class="form-label">No of Sub</label>
                <input type="number" min="0" max="5" id=totalsubi name=totalsub >
            </div>

            <div class="col-md-3 inputs topinputs" id="day">
                <label for="inputState" class="form-label">Day</label>
                <select id="inputday" class="form-select" name="inputday">

                    <option selected>Select</option>
                    <option>Monday</option>
                    <option>Tuesday</option>
                    <option>Wednesday</option>
                    <option>Thursday</option>
                    <option>Friday</option>
                    <option>Saturday</option>
                </select>
            </div>



    </div>








    <div class="container visually-hidden" id="Monday">


        <div class="container Body-bottom" id="H1Mon">
            <h5>Monday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Mon" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Mon" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Mon">
            <h5>Monday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Mon" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Mon" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Mon">
            <h5>Monday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Mon" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Mon" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Mon">
            <h5>Monday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Mon" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Mon" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Mon">
            <h5>Monday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Mon" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Mon" placeholder="">
            </div>
        </div>

        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnMon" name="submitMon"><b>Generate
                    Time-Table</b></button>
        </div>
    </div>



    <div class="container visually-hidden" id="Tuesday">


        <div class="container Body-bottom" id="H1Tue">
            <h5>Tuesday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Tue" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Tue" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Tue">
            <h5>Tuesday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Tue" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Tue" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Tue">
            <h5>Tuesday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Tue" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Tue" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Tue">
            <h5>Tuesday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Tue" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Tue" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Tue">
            <h5>Tuesday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Tue" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Tue" placeholder="">
            </div>
        </div>

        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnTue" name="submitTue"><b>Generate
                    Time-Table</b></button>
        </div>
    </div>


    <div class="container visually-hidden" id="Wednesday">
        <div class="container Body-bottom" id="H1Wed">
            <h5>Wednesday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Wed" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Wed" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Tue">
            <h5>Wednesday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Wed" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Wed" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Tue">
            <h5>Wednesday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Wed" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Wed" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Tue">
            <h5>Wednesday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Wed" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Wed" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Tue">
            <h5>Wednesday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Wed" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Wed" placeholder="">
            </div>
        </div>

        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnWed" name="submitWed"><b>Generate
                    Time-Table</b></button>
        </div>
    </div>


    <div class="container visually-hidden" id="Thursday">
        <div class="container Body-bottom" id="H1Thu">
            <h5>Thursday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Thu" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Thu" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Thu">
            <h5>Thursday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Thu" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Thu" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Thu">
            <h5>Thursday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Thu" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Thu" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Thu">
            <h5>Thursday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Thu" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Thu" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Thu">
            <h5>Thursday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Thu" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Thu" placeholder="">
            </div>
        </div>

        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnThu" name="submitThu"><b>Generate
                    Time-Table</b></button>
        </div>
    </div>


    <div class="container visually-hidden" id="Friday">
        <div class="container Body-bottom" id="H1Wed">
            <h5>Friday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Fri" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Fri" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Fri">
            <h5>Friday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Fri" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Fri" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Fri">
            <h5>Friday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Fri" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Fri" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Fri">
            <h5>Friday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Fri" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Fri" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Tue">
            <h5>Friday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Fri" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Fri" placeholder="">
            </div>
        </div>

        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnFri" name="submitFri"><b>Generate
                    Time-Table</b></button>
        </div>
    </div>


    <div class="container visually-hidden" id="Saturday">
        <div class="container Body-bottom" id="H1Sat">
            <h5>Saturday</h5>


            <h5 id="hour">Hour 1</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH1Sat" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH1Sat" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H2Sat">
            <h5>Saturday</h5>


            <h5 id="hour">Hour 2</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH2Sat" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH2Sat" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H3Sat">
            <h5>Saturday</h5>


            <h5 id="hour">Hour 3</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH3Sat" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH3Sat" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H4Sat">
            <h5>Saturday</h5>


            <h5 id="hour">Hour 4</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH4Sat" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH4Sat" placeholder="">
            </div>
        </div>


        <div class="container Body-bottom" id="H5Sat">
            <h5>Saturday</h5>


            <h5 id="hour">Hour 5</h5>


            <div class="col-3 inputs">
                <label for="inputState" class="form-label">Subject Code</label>
                <input type="text" class="form-control" name="subcodeH5Sat" placeholder="CA4118">
            </div>

            <div class="col-5 inputs">
                <label for="inputState" class="form-label">Subject Title</label>
                <input type="text" class="form-control" name="subtitleH5Sat" placeholder="">
            </div>
        </div>


        <div class="container Generate-btn">

            <button class="btn btn-outline-danger" type="submit" id="Gen-btnSat" name="submitSat"><b>Generate
                    Time-Table</b></button>
        </div>



    </div>
    </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="FacultyInput.js"></script>
</body>

</html>