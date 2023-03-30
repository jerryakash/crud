<?php
include "connect.php";
session_start();
$emailErr = "";

$sql = "select * from users";
$result = mysqli_query($conn, $sql);


if (isset($_POST["submit"])) {
    $user_id = $_POST['user_id'];
    $task_detail = $_POST['task_detail'];
    $task_type = $_POST['task_type'];

    $sql = "insert into task(user_id,task_detail,task_type) values('$user_id','$task_detail','$task_type')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

        echo "<script>
        alert('Task have assigned successfully');
        window.location='all_task.php';
        </script>";
    } else {
        echo "creation failed";
    }
}

?>
<!--===== html block======---->
<!doctype html>
<html lang="en">

<head>
    <!--===csslink===-->
    <title>Registration Page</title>
    <!--===csslink===-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .box {
            border: 2px solid rgb(233, 225, 225);
            padding: 15px;
            background-color: aliceblue;
            margin: 20px;
            border-radius: 20px;
        }

        .main {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(5, 93, 177, 1) 8%, rgba(3, 143, 210, 1) 81%, rgba(9, 9, 121, 1) 97%, rgba(0, 212, 255, 1) 100%);
            height: 890px;
        }

        span {
            font-size: 15px;
            color: red;
            padding: 3px;
        }

        body {
            font-weight: bold;
        }

        .intro {
            margin: 10px;
        }

        table td,
        table th {


            border: 1px solid gray;
        }

        .card {
            border-radius: 20px;

        }
    </style>


    <style>
        .box {
            border: 2px solid rgb(233, 225, 225);
            padding: 15px;
            background-color: aliceblue;
            margin: 30px;
            border-radius: 20px;
        }

        .main {
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(5, 93, 177, 1) 8%, rgba(3, 143, 210, 1) 81%, rgba(9, 9, 121, 1) 97%, rgba(0, 212, 255, 1) 100%);
            height: 890px;
        }

        span {
            font-size: 15px;
            color: red;
            padding: 3px;
        }

        body {
            font-weight: bold;
        }

        .error {
            color: red;
        }
    </style>

</head>

<body>
    <div class="container-fluid main">
        <div class="row">
            <p id="success"></p>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="box">
                    <h1 class="text-center mb-4">User Creation Form</h1>
                    <form action="" id="form" enctype="multipart/form-data" method="POST">

                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Select User</label>
                                <select name="user_id">
                                    <option value=''>-----SELECT-----</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        echo "<option value='$row[id]'>$row[name]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label id="email_lbl" for="email" class="form-label">Enter task details</label>
                                <input type="text" class="form-control" id="task-detail" name="task_detail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Select Task Type</label>
                                <select name="task_type" id="" class="form-control">
                                    <option value="0">Pending</option>
                                    <option value="1">Done</option>
                                </select>
                            </div>
                        </div>

                        <center><button id="submit" name="submit" type="submit" class="btn btn-primary btn-lg">Assign Task</button></center>
                    </form>
                    <div>

                        <p class="mt-2">Add Users <a href="index.php">click here to create</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--== external js ==-->
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables.net-bs/2.1.1/dataTables.bootstrap.min.js" integrity="sha512-3Oh481vgLg54WOogdGR71fm7D21LB3KNxh/z6Ms612X3tRboDg4eNgVO5Z5C8iQtbRnNwvQoCielmtLTYW4zcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>