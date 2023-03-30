<?php
include "connect.php";

$gender = "";
$nameErr = $emailErr = $phoneErr = "";
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['mobile'];

    $sql = "insert into users(name,email,mobile) values('$name','$email','$phone')";

    $result = mysqli_query($conn, $sql);
    if ($result) {

        echo "<script>
        alert('The user is successfully created');
        window.location='fetch.php';
        </script>";
    } else {
        echo "<script>
        alert('user creation failed');
        </script>";
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
                        <div class="row ">
                            <div class="mb-3 col-md-6">
                                <label for="name" class="form-label">Enter Your Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? $name : '' ?>">
                                <span id="name_error"><?php echo $nameErr ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label id="email_lbl" for="email" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="email" name="email" value="<?= isset($_POST['email']) ? $email : '' ?>">
                                <span id="email_error"><?php echo $emailErr ?></span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="phone" class="form-label">Enter Your Phone Number</label>
                                <input type="number" class="form-control" id="phone" name="mobile" value="<?= isset($_POST['mobile']) ? $phone : '' ?>">
                                <span id="phone_error"><?php echo $phoneErr ?></span>
                            </div>
                        </div>

                        <center><button id="submit" name="submit" type="submit" class="btn btn-primary btn-lg">Create</button></center>
                    </form>
                    <div>

                        <p class="mt-2">All Users <a href="fetch.php">click here users table</a></p>
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